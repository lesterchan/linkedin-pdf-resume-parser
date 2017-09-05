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
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $organisation;

    /**
     * @var string|null
     */
    protected $summary;

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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return RoleInterface
     */
    public function setTitle(string $title): RoleInterface
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrganisation(): ?string
    {
        return $this->organisation;
    }

    /**
     * @param string|null $organisation
     *
     * @return RoleInterface
     */
    public function setOrganisation(?string $organisation): RoleInterface
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * @param string|null $summary
     *
     * @return RoleInterface
     */
    public function setSummary(string $summary): RoleInterface
    {
        // Fix line breaks
        $summary = preg_replace("/\\\\r\\\\n$/", '', $summary);
        $this->summary = $summary;

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
     * @return RoleInterface
     */
    public function setStart(DateTimeInterface $start = null): RoleInterface
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
     * @return RoleInterface
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
    public function toArray(): array
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
