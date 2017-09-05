<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class UrlTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class UrlTest extends AbstractSectionTest
{
    protected $url;

    protected function setUp()
    {
        parent::setUp();

        $this->url = $this->parsePdf($this->getName())->getUrl();
    }

    protected function tearDown()
    {
        unset($this->url);
    }

    public function testLesterChan()
    {
        $this->assertEquals('https://www.linkedin.com/in/lesterchan', $this->url);
    }

    public function testMelvinLee()
    {
        $this->assertEquals('https://www.linkedin.com/in/zyml89', $this->url);
    }

    public function testKwongHowOng()
    {
        $this->assertEquals('https://www.linkedin.com/in/kwonghow', $this->url);
    }

    public function testLimCheeAun()
    {
        $this->assertEquals('https://www.linkedin.com/in/cheeaun', $this->url);
    }

    public function testYuanChuanKee()
    {
        $this->assertEquals('https://www.linkedin.com/in/yuanchuan', $this->url);
    }

    public function testBernardTraquena()
    {
        $this->assertEquals('https://www.linkedin.com/in/bernardtraquena', $this->url);
    }

    public function testNicoArianto()
    {
        $this->assertEquals('https://www.linkedin.com/in/nicoarianto', $this->url);
    }

    public function testJunXiuChan()
    {
        $this->assertEquals('https://www.linkedin.com/in/jun-xiu-chan-111181b0', $this->url);
    }

    public function testRandySugianto()
    {
        $this->assertEquals('https://www.linkedin.com/in/randy-sugianto-21aa558', $this->url);
    }

    public function testTingZhiLim()
    {
        $this->assertEquals('https://www.linkedin.com/in/limtingzhi', $this->url);
    }

    public function testXinyingLin()
    {
        $this->assertEquals('https://www.linkedin.com/in/xinying-lin-994864148', $this->url);
    }

    public function testWillisWee()
    {
        $this->assertEquals('https://www.linkedin.com/in/williswee', $this->url);
    }

    public function testCelineWong()
    {
        $this->assertEquals('https://www.linkedin.com/in/celine-wong', $this->url);
    }

    public function testWanLinCheung()
    {
        $this->assertEquals('https://www.linkedin.com/in/wan-lin-cheung-460680109', $this->url);
    }

    public function testLouisaChiew()
    {
        $this->assertEquals('https://www.linkedin.com/in/louisachiew', $this->url);
    }

    public function testLisaTjide()
    {
        $this->assertEquals('https://www.linkedin.com/in/lisatjide17', $this->url);
    }

    public function testSimYanTing()
    {
        $this->assertEquals('https://www.linkedin.com/in/simyanting', $this->url);
    }

    public function testAndrewWang()
    {
        $this->assertEquals('https://www.linkedin.com/in/wwerdna', $this->url);
    }

    public function testMingHaoTeoh()
    {
        $this->assertEquals('https://www.linkedin.com/in/minghaoteoh', $this->url);
    }

    public function testSharonJee()
    {
        $this->assertEquals('https://www.linkedin.com/in/sharonjee', $this->url);
    }
}
