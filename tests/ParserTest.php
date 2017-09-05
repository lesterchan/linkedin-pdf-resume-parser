<?php

namespace LinkedInResumeParser\Tests;

use LinkedInResumeParser\Exception\FileNotFoundException;
use LinkedInResumeParser\ParsedResume;
use LinkedInResumeParser\Parser;
use PHPUnit\Framework\TestCase;

/**
 * Class ParserTest
 *
 * @package LinkedInResumeParser\Tests
 */
class ParserTest extends TestCase
{
    /**
     * @var string
     */
    protected $samplePath;
    protected $resultPath;

    /**
     * @var Parser
     */
    protected $parser;

    /**
     * Setup testing variables & environment
     */
    public function setUp()
    {
        parent::setUp();

        $this->samplePath = realpath(__DIR__ . '/samples');
        $this->resultPath = realpath(__DIR__ . '/result');

        $this->parser = new Parser();
    }

    /**
     * Test that a file that does not exist throws the correct exception
     */
    public function testFileNotFound()
    {
        $this->expectException(FileNotFoundException::class);

        $this->parser->parse($this->samplePath . '/ResumeThatDoesNotExist.pdf');
    }

    /**
     * Test all samples and make sure no exceptions are thrown
     */
    public function testAllSamplesNoExceptions()
    {
        $samplePdfItems = glob($this->samplePath . '/*.pdf');

        foreach ($samplePdfItems as $key => $samplePdfItem) {
            $result = $this->parser->parse($samplePdfItem);
            $this->assertInstanceOf(ParsedResume::class, $result);
            file_put_contents(
                $this->resultPath. '/' . basename($samplePdfItem, '.pdf') . '.json',
                json_encode($result, JSON_PRETTY_PRINT)
            );
        }
    }
}
