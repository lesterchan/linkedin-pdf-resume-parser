<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class EmailTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class EmailTest extends AbstractSectionTest
{
    public function testLesterChan()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('lesterchan@gmail.com', $emailAddress);
    }

    public function testMelvinLee()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('zy@zy.sg', $emailAddress);
    }

    public function testKwongHowOng()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }

    public function testLimCheeAun()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('cheeaun@gmail.com', $emailAddress);
    }

    public function testYuanChuanKee()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }

    public function testBernardTraquena()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('btraquena@gmail.com', $emailAddress);
    }

    public function testNicoArianto()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('nico.arianto@gmail.com', $emailAddress);
    }

    public function testJunXiuChan()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('junxiu92@gmail.com', $emailAddress);
    }

    public function testRandySugianto()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('yukuku@gmail.com', $emailAddress);
    }

    public function testTingZhiLim()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }

    public function testXinyingLin()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('ccyouki@gmail.com', $emailAddress);
    }

    public function testWillisWee()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals('williswee@gmail.com', $emailAddress);
    }

    public function testCelineWong()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }

    public function testWanLinCheung()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }

    public function testLouisaChiew()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }

    public function testLisaTjide()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }

    public function testSimYanTing()
    {
        $emailAddress = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $emailAddress);
    }
}