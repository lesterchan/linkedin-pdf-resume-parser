<?php

namespace LinkedInResumeParser\Section;

use DateTimeInterface;

/**
 * Interface RoleInterface
 */
interface RoleInterface
{
    /**
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * @param string $title
     *
     * @return RoleInterface
     */
    public function setTitle(string $title): RoleInterface;

    /**
     * @return string|null
     */
    public function getOrganisation(): ?string;

    /**
     * @param string $organisation
     *
     * @return RoleInterface
     */
    public function setOrganisation(string $organisation): RoleInterface;

    /**
     * @return DateTimeInterface|null
     */
    public function getStart(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface $start
     *
     * @return RoleInterface
     */
    public function setStart(DateTimeInterface $start = null): RoleInterface;

    /**
     * @return DateTimeInterface|null
     */
    public function getEnd(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $end
     *
     * @return RoleInterface
     */
    public function setEnd(DateTimeInterface $end = null): RoleInterface;

    /**
     * @return string|null
     */
    public function getSummary(): ?string;

    /**
     * @param string $summary
     *
     * @return RoleInterface
     */
    public function setSummary(string $summary): RoleInterface;
}
