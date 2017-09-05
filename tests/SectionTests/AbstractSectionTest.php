<?php

namespace LinkedInResumeParser\Tests\SectionTests;

use LinkedInResumeParser\ParsedResume;
use LinkedInResumeParser\Parser;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractSectionTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
abstract class AbstractSectionTest extends TestCase
{
    /**
     * @var string
     */
    protected $samplePath;

    /**
     * @var Parser
     */
    protected $parser;

    /**
     * Setup testing variables & environment
     */
    protected function setUp()
    {
        parent::setUp();

        $this->samplePath = realpath(__DIR__ . '/../samples');

        $this->parser = new Parser();
    }

    /**
     * @param string $testMethodName
     *
     * @return ParsedResume
     *
     * @throws \Exception
     * @throws \LinkedInResumeParser\Exception\FileNotFoundException
     * @throws \LinkedInResumeParser\Exception\FileNotReadableException
     * @throws \LinkedInResumeParser\Exception\ParseException
     */
    protected function parsePdf(string $testMethodName): ParsedResume
    {
        $pdfFilename = substr($testMethodName, 4) . '.pdf';

        return $this->parser->parse($this->samplePath . '/' . $pdfFilename);
    }
}
