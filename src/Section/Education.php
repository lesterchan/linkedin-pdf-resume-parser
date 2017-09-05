<?php

namespace LinkedInResumeParser\Section;

use ArrayAccess;
use DateTimeInterface;
use JsonSerializable;
use LinkedInResumeParser\Traits\ArrayAccessible;

/**
 * Class EducationEntry
 *
 * @package LinkedInResumeParser\Section
 */
class Education implements JsonSerializable, Arrayable, ArrayAccess
{
    /**
     * Array Access Trait
     */
    use ArrayAccessible;

    /**
     * @var string|null
     */
    protected $level;

    /**
     * @var string|null
     */
    protected $courseTitle;

    /**
     * @var string
     */
    protected $institution;

    /**
     * @var string|null
     */
    protected $grade;

    /**
     * @var DateTimeInterface|null
     */
    protected $start;

    /**
     * @var DateTimeInterface|null
     */
    protected $end;

    /**
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @param string|null $level
     *
     * @return Education
     */
    public function setLevel($level): Education
    {
        $level = str_replace('’', '\'', $level);

        $this->level = $level;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCourseTitle(): ?string
    {
        return $this->courseTitle;
    }

    /**
     * @param string|null $courseTitle
     *
     * @return Education
     */
    public function setCourseTitle($courseTitle): Education
    {
        $this->courseTitle = $courseTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstitution(): string
    {
        return $this->institution;
    }

    /**
     * @param string $institution
     *
     * @return Education
     */
    public function setInstitution(string $institution): Education
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGrade(): ?string
    {
        return $this->grade;
    }

    /**
     * @param string|null $grade
     *
     * @return Education
     */
    public function setGrade($grade): Education
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getStart(): ?DateTimeInterface
    {
        return $this->start;
    }

    /**
     * @param DateTimeInterface|null $start
     *
     * @return Education
     */
    public function setStart($start): Education
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEnd(): ?DateTimeInterface
    {
        return $this->end;
    }

    /**
     * @param DateTimeInterface|null $end
     *
     * @return Education
     */
    public function setEnd($end): Education
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'level'                    => $this->level,
            'course_title'             => $this->courseTitle,
            'institution'              => $this->institution,
            'grade'                    => $this->grade,
            'start'                    => $this->start,
            'end'                      => $this->end,
        ];
    }
}
