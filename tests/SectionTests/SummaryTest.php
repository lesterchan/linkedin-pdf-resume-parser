<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class SummaryTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class SummaryTest extends AbstractSectionTest
{
    protected $summary;

    protected function setUp()
    {
        parent::setUp();

        $this->summary = $this->parsePdf($this->getName())->getSummary();
    }

    protected function tearDown()
    {
        unset($this->summary);
    }

    public function testLesterChan()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testMelvinLee()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testKwongHowOng()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testLimCheeAun()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testYuanChuanKee()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testBernardTraquena()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testNicoArianto()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testJunXiuChan()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testRandySugianto()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testTingZhiLim()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testXinyingLin()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testWillisWee()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testCelineWong()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testWanLinCheung()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testLouisaChiew()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testLisaTjide()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testSimYanTing()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testAndrewWang()
    {
        $this->assertEquals('N/A', $this->summary);
    }

    public function testMingHaoTeoh()
    {
        $this->assertNotEmpty($this->summary);
    }

    public function testSharonJee()
    {
        $this->assertEquals('N/A', $this->summary);
    }
}
