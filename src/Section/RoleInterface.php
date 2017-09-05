<?php

namespace LinkedInResumeParser\Section;

use DateTimeInterface;

/**
 * Interface RoleInterface
 */
interface RoleInterface
{
    /**
     * @return string | null
     */
    public function getTitle();

    /**
     * @param string $title
     * @return RoleInterface
     */
    public function setTitle(string $title): RoleInterface;

    /**
     * @return string | null
     */
    public function getOrganisation();

    /**
     * @param string $organisation
     * @return RoleInterface
     */
    public function setOrganisation(string $organisation): RoleInterface;

    /**
     * @return DateTimeInterface
     */
    public function getStart();

    /**
     * @param DateTimeInterface $start
     * @return RoleInterface
     */
    public function setStart(DateTimeInterface $start = null): RoleInterface;

    /**
     * @return DateTimeInterface | null
     */
    public function getEnd();

    /**
     * @param DateTimeInterface | null $end
     * @return RoleInterface
     */
    public function setEnd(DateTimeInterface $end = null): RoleInterface;

    /**
     * @return string
     */
    public function getSummary();

    /**
     * @param string $summary
     * @return RoleInterface
     */
    public function setSummary(string $summary): RoleInterface;
}
