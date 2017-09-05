<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class NameTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class NameTest extends AbstractSectionTest
{
    public function testLesterChan()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Lester Chan', $name);
    }

    public function testMelvinLee()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Melvin Lee', $name);
    }

    public function testKwongHowOng()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Kwong How Ong', $name);
    }

    public function testLimCheeAun()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Lim Chee Aun', $name);
    }

    public function testYuanChuanKee()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Yuan Chuan Kee', $name);
    }

    public function testBernardTraquena()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Bernard Traquena', $name);
    }

    public function testNicoArianto()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Nico Arianto', $name);
    }

    public function testJunXiuChan()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Jun Xiu Chan', $name);
    }

    public function testRandySugianto()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Randy Sugianto', $name);
    }

    public function testTingZhiLim()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Ting Zhi Lim', $name);
    }

    public function testXinyingLin()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Xinying Lin', $name);
    }

    public function testWillisWee()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Willis Wee', $name);
    }

    public function testCelineWong()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Celine Wong', $name);
    }

    public function testWanLinCheung()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Wan Lin Cheung', $name);
    }

    public function testLouisaChiew()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Louisa Chiew', $name);
    }

    public function testLisaTjide()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Lisa Tjide', $name);
    }

    public function testSimYanTing()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Sim Yan Ting', $name);
    }

    public function testAndrewWang()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Andrew Wang', $name);
    }

    public function testMingHaoTeoh()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('minghao teoh', $name);
    }
    public function testSharonJee()
    {
        $name = $this->parsePdf()->getName();
        $this->assertEquals('Sharon Jee', $name);
    }
}
