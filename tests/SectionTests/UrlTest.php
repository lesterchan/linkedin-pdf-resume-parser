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
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/lesterchan', $url);
    }

    public function testMelvinLee()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/zyml89', $url);
    }

    public function testKwongHowOng()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/kwonghow', $url);
    }

    public function testLimCheeAun()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/cheeaun', $url);
    }

    public function testYuanChuanKee()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/yuanchuan', $url);
    }

    public function testBernardTraquena()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/bernardtraquena', $url);
    }

    public function testNicoArianto()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/nicoarianto', $url);
    }

    public function testJunXiuChan()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/jun-xiu-chan-111181b0', $url);
    }

    public function testRandySugianto()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/randy-sugianto-21aa558', $url);
    }

    public function testTingZhiLim()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/limtingzhi', $url);
    }

    public function testXinyingLin()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/xinying-lin-994864148', $url);
    }

    public function testWillisWee()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/williswee', $url);
    }

    public function testCelineWong()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/celine-wong', $url);
    }

    public function testWanLinCheung()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/wan-lin-cheung-460680109', $url);
    }

    public function testLouisaChiew()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/louisachiew', $url);
    }

    public function testLisaTjide()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/lisatjide17', $url);
    }

    public function testSimYanTing()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/simyanting', $url);
    }

    public function testAndrewWang()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/wwerdna', $url);
    }

    public function testMingHaoTeoh()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/minghaoteoh', $url);
    }

    public function testSharonJee()
    {
        $url = $this->parsePdf()->getUrl();
        $this->assertEquals('https://www.linkedin.com/in/sharonjee', $url);
    }
}
