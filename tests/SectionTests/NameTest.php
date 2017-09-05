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
        $result = $this->parsePdf();
        $this->assertEquals('Lester Chan', $result->getName());
    }

    public function testMelvinLee()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Melvin Lee', $result->getName());
    }

    public function testKwongHowOng()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Kwong How Ong', $result->getName());
    }

    public function testLimCheeAun()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Lim Chee Aun', $result->getName());
    }

    public function testYuanChuanKee()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Yuan Chuan Kee', $result->getName());
    }

    public function testBernardTraquena()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Bernard Traquena', $result->getName());
    }

    public function testNicoArianto()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Nico Arianto', $result->getName());
    }

    public function testJunXiuChan()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Jun Xiu Chan', $result->getName());
    }

    public function testRandySugianto()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Randy Sugianto', $result->getName());
    }

    public function testTingZhiLim()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Ting Zhi Lim', $result->getName());
    }

    public function testXinyingLin()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Xinying Lin', $result->getName());
    }

    public function testWillisWee()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Willis Wee', $result->getName());
    }

    public function testCelineWong()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Celine Wong', $result->getName());
    }

    public function testWanLinCheung()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Wan Lin Cheung', $result->getName());
    }

    public function testLouisaChiew()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Louisa Chiew', $result->getName());
    }

    public function testLisaTjide()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Lisa Tjide', $result->getName());
    }

    public function testSimYanTing()
    {
        $result = $this->parsePdf();
        $this->assertEquals('Sim Yan Ting', $result->getName());
    }
}
