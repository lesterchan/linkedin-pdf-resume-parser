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
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testMelvinLee()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testKwongHowOng()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testLimCheeAun()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testYuanChuanKee()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testBernardTraquena()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testNicoArianto()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testJunXiuChan()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testRandySugianto()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testTingZhiLim()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testXinyingLin()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testWillisWee()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testCelineWong()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testWanLinCheung()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testLouisaChiew()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testLisaTjide()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testSimYanTing()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testAndrewWang()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }

    public function testMingHaoTeoh()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertNotEmpty($summary);
    }

    public function testSharonJee()
    {
        $summary = $this->parsePdf()->getSummary();
        $this->assertEquals('N/A', $summary);
    }
}
