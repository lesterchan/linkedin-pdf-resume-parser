<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class NameTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class NameTest extends AbstractSectionTest
{
    protected $name;

    protected function setUp()
    {
        parent::setUp();

        $this->name = $this->parsePdf($this->getName())->getName();
    }

    protected function tearDown()
    {
        unset($this->name);
    }

    public function testLesterChan()
    {
        $this->assertEquals('Lester Chan', $this->name);
    }

    public function testMelvinLee()
    {
        $this->assertEquals('Melvin Lee', $this->name);
    }

    public function testKwongHowOng()
    {
        $this->assertEquals('Kwong How Ong', $this->name);
    }

    public function testLimCheeAun()
    {
        $this->assertEquals('Lim Chee Aun', $this->name);
    }

    public function testYuanChuanKee()
    {
        $this->assertEquals('Yuan Chuan Kee', $this->name);
    }

    public function testBernardTraquena()
    {
        $this->assertEquals('Bernard Traquena', $this->name);
    }

    public function testNicoArianto()
    {
        $this->assertEquals('Nico Arianto', $this->name);
    }

    public function testJunXiuChan()
    {
        $this->assertEquals('Jun Xiu Chan', $this->name);
    }

    public function testRandySugianto()
    {
        $this->assertEquals('Randy Sugianto', $this->name);
    }

    public function testTingZhiLim()
    {
        $this->assertEquals('Ting Zhi Lim', $this->name);
    }

    public function testXinyingLin()
    {
        $this->assertEquals('Xinying Lin', $this->name);
    }

    public function testWillisWee()
    {
        $this->assertEquals('Willis Wee', $this->name);
    }

    public function testCelineWong()
    {
        $this->assertEquals('Celine Wong', $this->name);
    }

    public function testWanLinCheung()
    {
        $this->assertEquals('Wan Lin Cheung', $this->name);
    }

    public function testLouisaChiew()
    {
        $this->assertEquals('Louisa Chiew', $this->name);
    }

    public function testLisaTjide()
    {
        $this->assertEquals('Lisa Tjide', $this->name);
    }

    public function testSimYanTing()
    {
        $this->assertEquals('Sim Yan Ting', $this->name);
    }

    public function testAndrewWang()
    {
        $this->assertEquals('Andrew Wang', $this->name);
    }

    public function testMingHaoTeoh()
    {
        $this->assertEquals('minghao teoh', $this->name);
    }
    public function testSharonJee()
    {
        $this->assertEquals('Sharon Jee', $this->name);
    }
}
