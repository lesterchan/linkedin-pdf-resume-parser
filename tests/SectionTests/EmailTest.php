<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class EmailTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class EmailTest extends AbstractSectionTest
{
    protected $email;

    protected function setUp()
    {
        parent::setUp();

        $this->email = $this->parsePdf($this->getName())->getEmail();
    }

    protected function tearDown()
    {
        unset($this->email);
    }

    public function testLesterChan()
    {
        $this->assertEquals('lesterchan@gmail.com', $this->email);
    }

    public function testMelvinLee()
    {
        $this->assertEquals('zy@zy.sg', $this->email);
    }

    public function testKwongHowOng()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testLimCheeAun()
    {
        $this->assertEquals('cheeaun@gmail.com', $this->email);
    }

    public function testYuanChuanKee()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testBernardTraquena()
    {
        $this->assertEquals('btraquena@gmail.com', $this->email);
    }

    public function testNicoArianto()
    {
        $this->assertEquals('nico.arianto@gmail.com', $this->email);
    }

    public function testJunXiuChan()
    {
        $this->assertEquals('junxiu92@gmail.com', $this->email);
    }

    public function testRandySugianto()
    {
        $this->assertEquals('yukuku@gmail.com', $this->email);
    }

    public function testTingZhiLim()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testXinyingLin()
    {
        $this->assertEquals('ccyouki@gmail.com', $this->email);
    }

    public function testWillisWee()
    {
        $this->assertEquals('williswee@gmail.com', $this->email);
    }

    public function testCelineWong()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testWanLinCheung()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testLouisaChiew()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testLisaTjide()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testSimYanTing()
    {
        $this->assertEquals(null, $this->email);
    }

    public function testAndrewWang()
    {
        $this->assertEquals('keepwalking.aw@gmail.com', $this->email);
    }

    public function testMingHaoTeoh()
    {
        $this->assertEquals('minghao@techinasia.com', $this->email);
    }

    public function testSharonJee()
    {
        $this->assertEquals(null, $this->email);
    }
}
