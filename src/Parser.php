<?php

namespace LinkedInResumeParser;

use DateTime;
use LinkedInResumeParser\Exception\FileNotFoundException;
use LinkedInResumeParser\Exception\FileNotReadableException;
use LinkedInResumeParser\Exception\ParseException;
use LinkedInResumeParser\Pdf\TextLine;
use LinkedInResumeParser\Section\Education;
use LinkedInResumeParser\Section\Experience;
use LinkedInResumeParser\Section\RoleInterface;
use Smalot\PdfParser\Document;
use Smalot\PdfParser\Font;
use Smalot\PdfParser\Parser as PdfParser;

/**
 * Class Parser
 *
 * @package Persata\LinkedInResumeParser
 */
class Parser
{
    /**
     * Constants that designate the various sections of the resume
     */
    const SUMMARY = 'Summary';
    const EXPERIENCE = 'Experience';
    const EDUCATION = 'Education';

    /**
     * Constants that designate other parts of the resume that don't classify as a section.
     */
    const NAME = 'Name';
    const EMAIL = 'Email';
    const URL = 'URL';

    /**
     * Section titles for each part of the resume
     *
     * @var string[]
     */
    protected $sectionTitles = [
        self::SUMMARY,
        self::EXPERIENCE,
        self::EDUCATION,
        self::URL
    ];

    /**
     * @param string $filePath
     * @param array  $sections
     * @return ParsedResume
     * @throws FileNotFoundException
     * @throws FileNotReadableException
     * @throws ParseException
     * @throws \Exception
     */
    public function parse(string $filePath, array $sections = []): ParsedResume
    {
        if (! file_exists($filePath)) {
            throw new FileNotFoundException('File does not exists: ' . $filePath);
        }

        if (! is_readable($filePath)) {
            throw new FileNotReadableException('File is not readable: ' . $filePath);
        }

        $parsedPdfInstance = $this->getParsedPdfInstance($filePath);

        $allTextLines = $this->getAllTextLines($parsedPdfInstance);
        $textLines = $this->filterText($allTextLines);

        $parsedResumeInstance = new ParsedResume();

        $name = $textLines[0];

        if ($this->shouldParseSection(self::NAME, $sections)) {
            $parsedResumeInstance->setName($name);
        }

        [$textLines,] = $this->splitLastSection($textLines, $name);

        if ($this->shouldParseSection(self::EMAIL, $sections)
            && $email = $this->getEmail($textLines)) {
            $parsedResumeInstance->setEmail($email);
        }

        if ($this->shouldParseSection(self::SUMMARY, $sections)
            && $summary = $this->getSummary($textLines)) {
            $parsedResumeInstance->setSummary($summary);
        }

        if ($this->shouldParseSection(self::EXPERIENCE, $sections)
            && $experiences = $this->getExperiences($textLines)) {
            $parsedResumeInstance->setExperiences($experiences);
        }

        if ($this->shouldParseSection(self::EDUCATION, $sections)
            && $education = $this->getEducation($textLines)) {
            $parsedResumeInstance->setEducation($education);
        }

        if ($this->shouldParseSection(self::URL, $sections)
            && $url = $this->getUrl($filePath)) {
            $parsedResumeInstance->setUrl($url);
        }

        return $parsedResumeInstance;
    }

    /**
     * @param string $filePath
     *
     * @return Document
     */
    protected function getParsedPdfInstance(string $filePath): Document
    {
        $pdfParser = new PdfParser();
        return $pdfParser->parseFile($filePath);
    }

    /**
     * @param Document $parsedPdfInstance
     *
     * @return TextLine[]
     * @throws \Exception
     */
    protected function getAllTextLines(Document $parsedPdfInstance): array
    {
        $currentFont = new Font($parsedPdfInstance);

        $textLines = [];

        $libText = [];

        foreach ($parsedPdfInstance->getPages() as $page) {
            $libText = array_merge($libText, $page->getTextArray());

            $content = $page->get('Contents')->getContent();
            $sectionsText = $page->getSectionsText($content);

            foreach ($sectionsText as $section) {
                $commands = $page->getCommandsText($section);

                foreach ($commands as $command) {
                    switch ($command['o']) {
                        case 'Tf':
                            [$id,] = preg_split('/\s/', $command['c']);
                            $id = trim($id, '/');
                            $currentFont = $page->getFont($id);
                            break;
                        case "'":
                        case 'Tj':
                            $text = $currentFont->decodeText([$command]);
                            $textLines[] = new TextLine($text, $currentFont);
                            break;
                        case 'TJ':
                            $text = $currentFont->decodeText($command['c']);
                            $textLines[] = new TextLine($text, $currentFont);
                            break;
                        default:
                    }
                }
            }
        }

        return $textLines;
    }

    /**
     * @param array $textLines
     *
     * @return string[]
     */
    protected function filterText(array $textLines): array
    {
        $filteredTextLines = [];
        $size = count($textLines);

        for ($i = 0; $i < $size; $i++) {
            if ($this->isPageDesignation($i, $textLines)) {
                $i++;
                continue;
            }

            $filteredTextLines[] = $textLines[$i];
        }

        return $filteredTextLines;
    }

    /**
     * Check if the given section should be parsed.
     * If no sections specified it is assumed that all sections are to be parsed.
     *
     * @param string $section
     * @param array  $sectionsToParse
     * @return bool
     */
    protected function shouldParseSection($section, array $sectionsToParse): bool
    {
        return count($sectionsToParse) === 0 || in_array($section, $sectionsToParse, true);
    }

    /**
     * Check if the given index is indicative of being a Page designation
     * e.g. current index will be "Page" and then the immediate index will be the number
     *
     * @param int   $index
     * @param array $textLines
     *
     * @return bool
     */
    protected function isPageDesignation(int $index, array $textLines): bool
    {
        return (string)$textLines[$index] === 'Page ' && is_numeric((string)$textLines[$index + 1]);
    }

    /**
     * @param array    $textLines
     * @param TextLine $name
     * @return array
     */
    protected function splitLastSection(array $textLines, TextLine $name): array
    {
        $lastNameOccurrence = array_search($name, array_reverse($textLines), null);
        $lastSection = array_splice($textLines, count($textLines) - $lastNameOccurrence - 1);

        return [
            $textLines,
            $lastSection,
        ];
    }

    /**
     * @param TextLine[] $textLines
     *
     * @return string | null
     */
    protected function getEmail(array $textLines): ?string
    {
        /** @var TextLine[] $potentialEmailLines */
        $potentialEmailLines = array_slice($textLines, 1, 4);

        foreach ($potentialEmailLines as $potentialEmailLine) {
            // Very basic email check
            if (preg_match('/\@.*?$/', $potentialEmailLine->getText())) {
                return $potentialEmailLine->getText();
            }
        }

        return null;
    }

    /**
     * @param array $textLines
     *
     * @return string[]
     */
    protected function getTextValues(array $textLines): array
    {
        return array_map(function (TextLine $textLine) {
            return $textLine->getText();
        }, $textLines);
    }

    /**
     * @param string $sectionTitle
     * @param array  $textLines
     *
     * @return TextLine[]
     */
    protected function findSectionLines(string $sectionTitle, array $textLines): array
    {
        $startIndex = array_search($sectionTitle, $textLines, null);

        if ($startIndex === false) {
            return [];
        }

        $endIndex = $this->findSectionIndexEnd($startIndex, $textLines);

        $sectionLines = array_slice($textLines, $startIndex + 1, $endIndex - $startIndex - 1);

        return $this->mergeLinesByParagraph($sectionLines);
    }

    /**
     * @param int   $startIndex
     * @param array $textLines
     *
     * @return int
     */
    protected function findSectionIndexEnd(int $startIndex, array $textLines): int
    {
        $size = count($textLines);

        for ($i = $startIndex + 1; $i < $size; $i++) {
            if (in_array($textLines[$i], $this->sectionTitles, null)) {
                return $i;
            }
        }

        return count($textLines);
    }

    /**
     * @param array $textLines
     *
     * @return array
     */
    protected function mergeLinesByParagraph($textLines): array
    {
        $resultLines = [];
        $size = count($textLines);
        if ($size) {
            $resultLines[] = $textLines[0]; // set first line

            // if new line starts from space we concatenate new line with the previous
            for ($i = 1; $i < $size; $i++) {
                $resultLinesCount = count($resultLines);

                if ($resultLinesCount && '' !== $textLines[$i] && str_split($textLines[$i])[0] === ' ') {
                    $resultLines[$resultLinesCount - 1]->addText($textLines[$i]);
                } else {
                    $resultLines[] = $textLines[$i];
                }
            }
        }


        return $resultLines;
    }

    /**
     * @param array $textLines
     *
     * @return string|null
     */
    protected function getSummary(array $textLines): ?string
    {
        $startIndex = array_search(self::SUMMARY, $textLines, null);

        if ($startIndex === false) {
            return null;
        }

        $endIndex = $this->findSectionIndexEnd($startIndex, $textLines);

        return implode('', array_slice($textLines, $startIndex + 1, $endIndex - $startIndex - 1));
    }

    /**
     * @param string $file
     *
     * @return string|null
     */
    protected function getUrl(string $file): ?string
    {
        $urls = [];

        preg_match_all('/URI \(([^,]*?)\)/', file_get_contents($file, true), $urls);
        if (count($urls) > 0) {
            return array_reverse($urls)[0][0];
        }

        return null;
    }

    /**
     * @param array $textLines
     *
     * @return Experience[]
     * @throws ParseException
     */
    protected function getExperiences(array $textLines): array
    {
        $roleLines = $this->findSectionLines(self::EXPERIENCE, $textLines);
        return $this->buildRoleTypes(Experience::class, $roleLines);
    }

    /**
     * @param string     $classType
     * @param TextLine[] $roleLines
     *
     * @return array
     * @throws ParseException
     */
    protected function buildRoleTypes(string $classType, array $roleLines): array
    {
        $roleTypes = [];

        $currentGroupIndex = 0;
        $roleGroups = [];
        $previousLineWasBold = false;

        foreach ($roleLines as $key => $roleLine) {
            $roleLineText = $roleLine->getText();

            if (preg_match('/\s{2}-\s{2}/', $roleLineText)) {
                $previousLineWasBold = false;
                $roleGroups[$currentGroupIndex]['date'] = $roleLineText;
            } elseif ($roleLine->isBold()) {
                $currentGroupIndex++;
                if (! $previousLineWasBold) {
                    $roleGroups[$currentGroupIndex] = [
                        'title'   => '',
                        'date'    => '',
                        'summary' => '',
                    ];
                    $roleGroups[$currentGroupIndex]['title'] .= ' ' . $roleLineText;
                    $previousLineWasBold = true;
                } else {
                    $roleGroups[$currentGroupIndex] = [
                        'title'   => $roleLineText,
                        'date'    => '',
                        'summary' => '',
                    ];
                }
            } elseif (! preg_match('/^\(.*\)$/', $roleLineText)) { // This indicates the duration, so skip it.
                $previousLineWasBold = false;
                $roleGroups[$currentGroupIndex]['summary'] .= $roleLineText . '\r\n';
            }
        }

        foreach ($roleGroups as $roleGroup) {
            /** @var RoleInterface $roleType */
            $roleType = new $classType();

            [$title, $organisation] = $this->parseRoleParts($roleGroup['title']);

            $roleType
                ->setTitle($title)
                ->setOrganisation($organisation);

            if ($roleGroup['date']) {
                [$start, $end] = $this->parseDateRange($roleGroup['date'], ' - ');

                $roleType
                    ->setStart($start)
                    ->setEnd($end);
            }

            if ($roleGroup['summary']) {
                $roleType->setSummary($roleGroup['summary']);
            }

            $roleTypes[] = $roleType;
        }

        return $roleTypes;
    }

    /**
     * @param string $roleLine
     *
     * @return array
     * @throws ParseException
     */
    protected function parseRoleParts(string $roleLine): array
    {
        $roleParts = $this->splitAndTrim(' at ', $roleLine);

        if (count($roleParts) === 2) {
            return $roleParts;
        }
        if (count($roleParts) === 1) {
            return [$roleParts[0], null];
        }

        throw new ParseException('Unable to parse job title and organisation: ' . $roleLine);
    }

    /**
     * @param array $textLines
     *
     * @return array
     * @throws ParseException
     */
    protected function getEducation(array $textLines): array
    {
        $educationLines = $this->findSectionLines(self::EDUCATION, $textLines);

        $education = [];
        $educationEntry = null;
        $educationSize = count($educationLines);

        for ($i = 0; $i < $educationSize; $i++) {
            $educationLine = $educationLines[$i];

            /** @var Education $educationEntry */

            if (preg_match('/(.*?)\,\s(.*?)\,\s(\d{4})\s-\s(\d{4})$/', $educationLine, $matches)) {
                // "Bachelor of Arts, Theatre Management, 2006 - 2010"
                $educationEntry
                    ->setLevel($matches[1])
                    ->setCourseTitle($matches[2])
                    ->setStart($this->parseStringToDateTime($matches[3]))
                    ->setEnd($this->parseStringToDateTime($matches[4]));
            } elseif (preg_match('/(.*?)\,\s(.*?)\,\s(\d{4})$/', $educationLine, $matches)) {
                // "Bachelor’s Degree, Biomedical Engineering, 2014"
                $educationEntry
                    ->setLevel($matches[1])
                    ->setCourseTitle($matches[2])
                    ->setEnd($this->parseStringToDateTime($matches[3]));
            } elseif (preg_match('/(.*?),\s(\d{4})\s-\s(\d{4})/', $educationLine, $matches)) {
                // "High School, 2002 - 2004"
                $educationEntry
                    ->setLevel($matches[1])
                    ->setStart($this->parseStringToDateTime($matches[2]))
                    ->setEnd($this->parseStringToDateTime($matches[3]));
            } elseif (preg_match('/(.*?),\s(\d{4})/', $educationLine, $matches)) {
                // "High School, 2009"
                $educationEntry
                    ->setLevel($matches[1])
                    ->setEnd($this->parseStringToDateTime($matches[2]));
            } elseif (preg_match('/(\d{4})\s-\s(\d{4})/', $educationLine, $matches)) {
                // "2002 - 2006"
                $educationEntry
                    ->setStart($this->parseStringToDateTime($matches[1]))
                    ->setEnd($this->parseStringToDateTime($matches[2]));
            } elseif (trim($educationLine) === 'Activities and Societies:') {
                // We are not using this information
                // "Activities and Societies: "
                // At least one line belongs to "Activities and Societies"
                $activitiesAndSocieties = $educationLines[$i + 1];
                // Modify the index to skip any lines we process here
                $i++;
                // And there may be more lines that start with a space that should be appended to the activities
                for ($activitiesAndSocietiesIndex = $i + 1;
                     $activitiesAndSocietiesIndex < $educationSize;
                     $activitiesAndSocietiesIndex++) {
                    if (preg_match('/^\s(.*)$/', $educationLines[$activitiesAndSocietiesIndex])) {
                        $activitiesAndSocieties .= $educationLines[$activitiesAndSocietiesIndex];
                        $i++;
                    } else {
                        break;
                    }
                }
            } elseif (trim($educationLine) === 'Grade:') {
                // "Grade: "
                $educationEntry->setGrade($educationLines[$i + 1]);
                $i++;
            } else {
                if (null !== $educationEntry) {
                    $education[] = $educationEntry;
                }

                $educationEntry = (new Education())->setInstitution($educationLine);
            }
        }

        if (null !== $educationEntry) {
            $education[] = $educationEntry;
        }

        return $education;
    }

    /**
     * @param string $delimiter
     * @param string $string
     *
     * @return array
     */
    protected function splitAndTrim(string $delimiter, string $string): array
    {
        return array_map(
            'trim',
            explode($delimiter, $string)
        );
    }

    /**
     * @param string $datesLine
     * @param string $delimiter
     *
     * @return array
     * @throws ParseException
     */
    protected function parseDateRange(string $datesLine, string $delimiter): array
    {
        $dateParts = $this->splitAndTrim($delimiter, $datesLine);

        if (count($dateParts) === 2) {
            $startDateTime = $this->parseStringToDateTime($dateParts[0]);

            if ($dateParts[1] === 'Present') {
                $endDateTime = null;
            } else {
                $endDateTime = $this->parseStringToDateTime($dateParts[1]);
            }

            return [
                $startDateTime,
                $endDateTime,
            ];
        }

        throw new ParseException('Unable to parse date range: ' . $datesLine);
    }

    /**
     * @param string $string
     *
     * @return DateTime
     * @throws ParseException
     */
    protected function parseStringToDateTime(string $string): DateTime
    {
        if (preg_match('/\w{1,}\s\d{4}/', $string)) {
            return DateTime::createFromFormat('H:i:s d F Y', '00:00:00 01 ' . $string);
        }
        if (preg_match('/\d{4}/', $string)) {
            return DateTime::createFromFormat('H:i:s d m Y', '00:00:00 01 01 ' . $string);
        }

        throw new ParseException('Unable to parse date time: ' . $string);
    }
}
