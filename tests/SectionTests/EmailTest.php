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
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('lesterchan@gmail.com', $email);
    }

    public function testMelvinLee()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('zy@zy.sg', $email);
    }

    public function testKwongHowOng()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testLimCheeAun()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('cheeaun@gmail.com', $email);
    }

    public function testYuanChuanKee()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testBernardTraquena()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('btraquena@gmail.com', $email);
    }

    public function testNicoArianto()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('nico.arianto@gmail.com', $email);
    }

    public function testJunXiuChan()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('junxiu92@gmail.com', $email);
    }

    public function testRandySugianto()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('yukuku@gmail.com', $email);
    }

    public function testTingZhiLim()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testXinyingLin()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('ccyouki@gmail.com', $email);
    }

    public function testWillisWee()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('williswee@gmail.com', $email);
    }

    public function testCelineWong()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testWanLinCheung()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testLouisaChiew()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testLisaTjide()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testSimYanTing()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }

    public function testAndrewWang()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('keepwalking.aw@gmail.com', $email);
    }

    public function testMingHaoTeoh()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals('minghao@techinasia.com', $email);
    }

    public function testSharonJee()
    {
        $email = $this->parsePdf()->getEmail();
        $this->assertEquals(null, $email);
    }
}
