<?php

namespace LinkedInResumeParser\Section;

use ArrayAccess;
use DateTimeInterface;
use JsonSerializable;
use LinkedInResumeParser\Traits\ArrayAccessible;

/**
 * Class Experience
 *
 * @package LinkedInResumeParser
 */
class Experience implements JsonSerializable, RoleInterface, Arrayable, ArrayAccess
{
    /**
     * Array Access Trait
     */
    use ArrayAccessible;

    /**
     * @var string | null
     */
    protected $title;

    /**
     * @var string | null
     */
    protected $organisation;

    /**
     * @var string | null
     */
    protected $summary;

    /**
     * @var DateTimeInterface | null
     */
    protected $start;

    /**
     * @var DateTimeInterface | null
     */
    protected $end;

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     * @return Role | RoleInterface
     */
    public function setTitle(string $title): RoleInterface
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * @param null|string $organisation
     * @return Role | RoleInterface
     */
    public function setOrganisation(?string $organisation): RoleInterface
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param null|string $summary
     * @return Role | RoleInterface
     */
    public function setSummary(string $summary): RoleInterface
    {
        // fix line breaks
        $summary = preg_replace("/\\\\r\\\\n$/", "", $summary);
        // $summary = preg_replace("/\\\\r\\\\n-/", "___BREAK___", $summary);
        // $summary = preg_replace("/\\\\r\\\\n/", "", $summary);
        // $summary = preg_replace("/___BREAK___/", "\\r\\n-", $summary);
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param DateTimeInterface|null $start
     * @return Role | RoleInterface
     */
    public function setStart(DateTimeInterface $start = null): RoleInterface
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param DateTimeInterface|null $end
     * @return Role | RoleInterface
     */
    public function setEnd(DateTimeInterface $end = null): RoleInterface
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
    public function toArray()
    {
        return [
            'title'        => $this->title,
            'organisation' => $this->organisation,
            'summary'      => $this->summary,
            'start'        => $this->start ?? null,
            'end'          => $this->end ?? null,
        ];
    }
}
