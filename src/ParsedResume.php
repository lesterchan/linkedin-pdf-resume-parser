<?php

namespace LinkedInResumeParser;

use ArrayAccess;
use JsonSerializable;
use LinkedInResumeParser\Section\Arrayable;
use LinkedInResumeParser\Section\Education;
use LinkedInResumeParser\Section\Experience;
use LinkedInResumeParser\Traits\ArrayAccessible;

/**
 * Class ParsedResume
 *
 * @package LinkedInResumeParser
 */
class ParsedResume implements JsonSerializable, Arrayable, ArrayAccess
{
    /**
     * Array Access Trait
     */
    use ArrayAccessible;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $summary;

    /**
     * @var Experience[]
     */
    protected $experiences = [];

    /**
     * @var Education[]
     */
    protected $education = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return ParsedResume
     */
    public function setName(string $name): ParsedResume
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return ParsedResume
     */
    public function setEmail(string $email): ParsedResume
    {
        $this->email = $email;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return ParsedResume
     */
    public function setUrl(string $url): ParsedResume
    {
        $this->url = str_replace('http://', 'https://', $url);
        return $this;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return ParsedResume
     */
    public function setSummary(string $summary): ParsedResume
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return Experience[]
     */
    public function getExperiences(): array
    {
        return $this->experiences;
    }

    /**
     * @param Experience[] $experiences
     *
     * @return ParsedResume
     */
    public function setExperiences(array $experiences): ParsedResume
    {
        $this->experiences = $experiences;
        return $this;
    }

    /**
     * @return Education[]
     */
    public function getEducation(): array
    {
        return $this->education;
    }

    /**
     * @param Education[] $education
     *
     * @return ParsedResume
     */
    public function setEducation(array $education): ParsedResume
    {
        $this->education = $education;
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
            'name'                       => $this->name,
            'email'                      => $this->email,
            'url'                        => $this->url,
            'summary'                    => $this->summary,
            'experiences'                => $this->itemsToArray($this->experiences),
            'education'                  => $this->itemsToArray($this->education),
        ];
    }

    /**
     * @param array $items
     *
     * @return array
     */
    protected function itemsToArray(array $items): array
    {
        return array_map(function (Arrayable $item) {
            return $item->toArray();
        }, $items);
    }
}
