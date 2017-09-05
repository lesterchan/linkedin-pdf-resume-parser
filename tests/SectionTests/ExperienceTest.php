<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class ExperienceTest
 * We limit to just 6 previous roles.
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class ExperienceTest extends AbstractSectionTest
{
    public function testLesterChan()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Head of Engineering', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('September 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('WordPress Plugins Developer', $experience->getTitle());
        $this->assertEquals('WordPress', $experience->getOrganisation());
        $this->assertEquals('September 2003', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Founder', $experience->getTitle());
        $this->assertEquals('lesterchan.net', $experience->getOrganisation());
        $this->assertEquals('March 2003', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Senior Web Engineer', $experience->getTitle());
        $this->assertEquals('migme', $experience->getOrganisation());
        $this->assertEquals('February 2010', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Web Developer', $experience->getTitle());
        $this->assertEquals('Sedgwick Richardson (SEA) Pte Ltd', $experience->getOrganisation());
        $this->assertEquals('May 2009', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Guest Speaker', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('March 2009', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('March 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testMelvinLee()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Web Engineer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('June 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Software Developer', $experience->getTitle());
        $this->assertEquals('UXArmy Pte. Ltd.', $experience->getOrganisation());
        $this->assertEquals('December 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Web Designer / Developer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('January 2005', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('January 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testKwongHowOng()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Web Engineer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('November 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Software Engineering Analyst', $experience->getTitle());
        $this->assertEquals('Accenture', $experience->getOrganisation());
        $this->assertEquals('December 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('October 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Associate Software Engineer', $experience->getTitle());
        $this->assertEquals('Accenture', $experience->getOrganisation());
        $this->assertEquals('October 2012', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('November 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Graduate Trainee', $experience->getTitle());
        $this->assertEquals('Accenture', $experience->getOrganisation());
        $this->assertEquals('July 2012', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('September 2012', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testLimCheeAun()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Senior Software Engineer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('February 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Software Engineer', $experience->getTitle());
        $this->assertEquals('Viki, Inc.', $experience->getOrganisation());
        $this->assertEquals('July 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('October 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Senior Front-End Developer', $experience->getTitle());
        $this->assertEquals('Wego.com', $experience->getOrganisation());
        $this->assertEquals('August 2009', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('June 2013', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Freelance CSS Developer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('January 2007', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Web Developer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('June 2008', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('CSS Web Designer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('July 2006', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('May 2007', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testYuanChuanKee()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Data Engineer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('February 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Analytics Manager', $experience->getTitle());
        $this->assertEquals('SP Group', $experience->getOrganisation());
        $this->assertEquals('August 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('February 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Consultant (Big Data and Analytics)', $experience->getTitle());
        $this->assertEquals('IBM', $experience->getOrganisation());
        $this->assertEquals('September 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Research Assistant', $experience->getTitle());
        $this->assertEquals('National Cancer Centre Singapore', $experience->getOrganisation());
        $this->assertEquals('June 2012', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('May 2013', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Research Engineer', $experience->getTitle());
        $this->assertEquals('National University of Singapore', $experience->getOrganisation());
        $this->assertEquals('January 2012', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('May 2012', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Data Visualisation Scientist', $experience->getTitle());
        $this->assertEquals('Genome Institute of Singapore', $experience->getOrganisation());
        $this->assertEquals('August 2011', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('November 2011', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testBernardTraquena()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Senior Software and DevOps Engineer', $experience->getTitle());
        $this->assertEquals('MigMe', $experience->getOrganisation());
        $this->assertEquals('September 2011', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Senior IT Analyst', $experience->getTitle());
        $this->assertEquals('National Library Board/Emerion Globesoft', $experience->getOrganisation());
        $this->assertEquals('September 2010', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('September 2011', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Senior Programmer Analyst', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('October 2009', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('September 2010', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Senior Operations Manager and Developer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('January 2005', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('January 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testNicoArianto()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Data Engineer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('August 2017', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Senior Data Engineer', $experience->getTitle());
        $this->assertEquals('honestbee', $experience->getOrganisation());
        $this->assertEquals('February 2017', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2017', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Senior Member of Technical Staff', $experience->getTitle());
        $this->assertEquals('Oracle', $experience->getOrganisation());
        $this->assertEquals('October 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('February 2017', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('AVP, Technology', $experience->getTitle());
        $this->assertEquals('JustCommodity Software Solutions', $experience->getOrganisation());
        $this->assertEquals('April 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('October 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Lead Software Engineer', $experience->getTitle());
        $this->assertEquals('JustCommodity Software Solutions', $experience->getOrganisation());
        $this->assertEquals('May 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Senior Software Engineer', $experience->getTitle());
        $this->assertEquals('JustCommodity Software Solutions', $experience->getOrganisation());
        $this->assertEquals('March 2010', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('May 2013', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testJunXiuChan()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('iOS Engineer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('January 2017', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Product Designer', $experience->getTitle());
        $this->assertEquals('99.co', $experience->getOrganisation());
        $this->assertEquals('April 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('December 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('iOS Engineer', $experience->getTitle());
        $this->assertEquals('99.co', $experience->getOrganisation());
        $this->assertEquals('February 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('iOS Engineer', $experience->getTitle());
        $this->assertEquals('Saleswhale', $experience->getOrganisation());
        $this->assertEquals('November 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('January 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('iOS Engineer', $experience->getTitle());
        $this->assertEquals('buUuk Pte Ltd', $experience->getOrganisation());
        $this->assertEquals('June 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('October 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());
    }

    public function testRandySugianto()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Programmer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('June 2008', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2008', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());
    }

    public function testTingZhiLim()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Data Analyst Intern', $experience->getTitle());
        $this->assertEquals('National Council of Social Service (NCSS)', $experience->getOrganisation());
        $this->assertEquals('May 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Sustainable Supply Chain Solutions (IT/Analytics) Intern', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('May 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testXinyingLin()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Data Analyst', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals(null, $experience->getStart());
        $this->assertEquals(null, $experience->getEnd());
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Assistant Engineer', $experience->getTitle());
        $this->assertEquals('China Telecom', $experience->getOrganisation());
        $this->assertEquals('August 2012', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('June 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }
    public function testWillisWee()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('CEO and founder', $experience->getTitle());
        $this->assertEquals('Tech in Asia (YC W15)', $experience->getOrganisation());
        $this->assertEquals('March 2010', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Account Servicing Intern', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('May 2010', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2010', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Business Development Executive', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('April 2009', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Co-founder', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('December 2004', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Sales Executive', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('December 2005', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2006', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Sales Executive', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('November 2003', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('December 2003', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());
    }

    public function testCelineWong()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Product Manager', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('January 2017', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Full Stack Web Developer (Student)', $experience->getTitle());
        $this->assertEquals('General Assembly', $experience->getOrganisation());
        $this->assertEquals('August 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('November 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Account Manager / Digital Strategist', $experience->getTitle());
        $this->assertEquals('Up BrandBuzz Pte Ltd', $experience->getOrganisation());
        $this->assertEquals('March 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Digital Strategist', $experience->getTitle());
        $this->assertEquals('GOODSTUPH Private Limited', $experience->getOrganisation());
        $this->assertEquals('July 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('December 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Marketing and Communications Intern', $experience->getTitle());
        $this->assertEquals('The Fullerton Hotel & The Fullerton Bay Hotel', $experience->getOrganisation());
        $this->assertEquals('June 2011', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2011', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Freelance Video Editor', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('December 2008', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('June 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertEmpty($experience->getSummary());
    }

    public function testWanLinCheung()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('UI/UX Designer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('November 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('UI Designer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('June 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('November 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Designer', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('January 2010', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('January 2012', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Game Artist', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('January 2007', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('January 2009', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testLouisaChiew()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Product Marketing Lead (Jobs)', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('July 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Content Marketing', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('July 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Marketing and Business Development Assistant', $experience->getTitle());
        $this->assertEquals('Omnicom Media Group Asia Pacific', $experience->getOrganisation());
        $this->assertEquals('March 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('July 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testLisaTjide()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Product Marketer (Employers)', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('November 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Business Development Executive, Emerging Business', $experience->getTitle());
        $this->assertEquals('StarHub', $experience->getOrganisation());
        $this->assertEquals('January 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('November 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Innovation Advocate', $experience->getTitle());
        $this->assertEquals('StarHub i3', $experience->getOrganisation());
        $this->assertEquals('July 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('September 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Project Manager', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('May 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Intern, Education Department, Marine Life Park', $experience->getTitle());
        $this->assertEquals('Resorts World Sentosa', $experience->getOrganisation());
        $this->assertEquals('May 2013', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2013', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Undergraduate Researcher', $experience->getTitle());
        $this->assertEquals('Singapore University of Technology and Design (SUTD)', $experience->getOrganisation());
        $this->assertEquals('September 2012', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('December 2012', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testSimYanTing()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Growth product manager, Tech in Asia Jobs', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('March 2017', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Content expert, product marketing', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('October 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('March 2017', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Community Editor', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('January 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('October 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Social Media Strategist', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('August 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('November 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Business Development Executive', $experience->getTitle());
        $this->assertEquals('Sugar Technologies', $experience->getOrganisation());
        $this->assertEquals('June 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('October 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Editorial Intern', $experience->getTitle());
        $this->assertEquals('Vulcan Post', $experience->getOrganisation());
        $this->assertEquals('December 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('December 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testAndrewWang()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Chief Operating Officer', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('May 2015', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('VP, Business Development, Sales & Events', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('October 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2015', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Head of Japan, Business Development', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('January 2014', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('December 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Business Development Manager', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('August 2012', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('January 2014', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[4];
        $this->assertEquals('Owner', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('April 2011', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('May 2012', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[5];
        $this->assertEquals('Social Media Account Executive', $experience->getTitle());
        $this->assertEquals('SingTel', $experience->getOrganisation());
        $this->assertEquals('July 2011', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('August 2011', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testMingHaoTeoh()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $experience = $experiences[0];
        $this->assertEquals('Head of BD, Jobs', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('May 2016', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals(null, $experience->getEnd());
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[1];
        $this->assertEquals('Head of Business Development, Indonesia', $experience->getTitle());
        $this->assertEquals('Tech in Asia', $experience->getOrganisation());
        $this->assertEquals('June 2011', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2016', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[2];
        $this->assertEquals('Intern', $experience->getTitle());
        $this->assertEquals('Travelogy.com Pte Ltd', $experience->getOrganisation());
        $this->assertEquals('May 2011', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('June 2011', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());

        $experience = $experiences[3];
        $this->assertEquals('Owner', $experience->getTitle());
        $this->assertEquals(null, $experience->getOrganisation());
        $this->assertEquals('January 2007', date_format($experience->getStart(), 'F Y'));
        $this->assertEquals('April 2011', date_format($experience->getEnd(), 'F Y'));
        $this->assertNotEmpty($experience->getSummary());
    }

    public function testSharonJee()
    {
        $experiences = $this->parsePdf()->getExperiences();

        $this->assertEmpty($experiences);
    }
}
