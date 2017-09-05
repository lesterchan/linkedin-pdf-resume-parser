<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class SummaryTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class SummaryTest extends AbstractSectionTest
{
    public function testLesterChan()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testMelvinLee()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testKwongHowOng()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testLimCheeAun()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testYuanChuanKee()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testBernardTraquena()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testNicoArianto()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testJunXiuChan()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testRandySugianto()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testTingZhiLim()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testXinyingLin()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testWillisWee()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }

    public function testCelineWong()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testWanLinCheung()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testLouisaChiew()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testLisaTjide()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }

    public function testSimYanTing()
    {
        $result = $this->parsePdf();
        $this->assertNotEmpty($result->getSummary());
    }
    public function testAndrewWang()
    {
        $result = $this->parsePdf();
        $this->assertEquals('N/A', $result->getSummary());
    }
}
