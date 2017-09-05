<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class UrlTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class UrlTest extends AbstractSectionTest
{
    public function testLesterChan()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/lesterchan', $result->getUrl());
    }

    public function testMelvinLee()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/zyml89', $result->getUrl());
    }

    public function testKwongHowOng()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/kwonghow', $result->getUrl());
    }

    public function testLimCheeAun()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/cheeaun', $result->getUrl());
    }

    public function testYuanChuanKee()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/yuanchuan', $result->getUrl());
    }

    public function testBernardTraquena()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/bernardtraquena', $result->getUrl());
    }

    public function testNicoArianto()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/nicoarianto', $result->getUrl());
    }

    public function testJunXiuChan()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/jun-xiu-chan-111181b0', $result->getUrl());
    }

    public function testRandySugianto()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/randy-sugianto-21aa558', $result->getUrl());
    }

    public function testTingZhiLim()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/limtingzhi', $result->getUrl());
    }

    public function testXinyingLin()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/xinying-lin-994864148', $result->getUrl());
    }

    public function testWillisWee()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/williswee', $result->getUrl());
    }

    public function testCelineWong()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/celine-wong', $result->getUrl());
    }

    public function testWanLinCheung()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/wan-lin-cheung-460680109', $result->getUrl());
    }

    public function testLouisaChiew()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/louisachiew', $result->getUrl());
    }

    public function testLisaTjide()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/lisatjide17', $result->getUrl());
    }

    public function testSimYanTing()
    {
        $result = $this->parsePdf();
        $this->assertEquals('https://www.linkedin.com/in/simyanting', $result->getUrl());
    }
}
