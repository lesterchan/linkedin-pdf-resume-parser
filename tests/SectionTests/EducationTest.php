<?php

namespace LinkedInResumeParser\Tests\SectionTests;

/**
 * Class EducationTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
class EducationTest extends AbstractSectionTest
{
    public function testLesterChan()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor of Computing (Honors)', $edu->getLevel());
        $this->assertEquals(
            'Information Systems, Specialized in Services Science, Management and Engineering (SSME)',
            $edu->getCourseTitle()
        );
        $this->assertEquals('National University of Singapore', $edu->getInstitution());
        $this->assertEquals(2006, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2010, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('Diploma in Multimedia Technology', $edu->getLevel());
        $this->assertEquals('Singapore Polytechnic', $edu->getInstitution());
        $this->assertEquals(2001, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2004, date_format($edu->getEnd(), 'Y'));
    }

    public function testMelvinLee()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor\'s Degree', $edu->getLevel());
        $this->assertEquals(
            'Computing (Honours, Second Upper) in Communications and Media, Computer Science',
            $edu->getCourseTitle()
        );
        $this->assertEquals('National University of Singapore', $edu->getInstitution());
        $this->assertEquals(2010, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2015, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('Diploma in Digital Media (Merit)', $edu->getLevel());
        $this->assertEquals('Singapore Polytechnic', $edu->getInstitution());
        $this->assertEquals(2005, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2009, date_format($edu->getEnd(), 'Y'));
    }

    public function testKwongHowOng()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor\'s Degree', $edu->getLevel());
        $this->assertEquals('Computer Engineering', $edu->getCourseTitle());
        $this->assertEquals('National University of Singapore', $edu->getInstitution());
        $this->assertEquals(2008, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($edu->getEnd(), 'Y'));
    }

    public function testLimCheeAun()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor', $edu->getLevel());
        $this->assertEquals('Computer Engineering', $edu->getCourseTitle());
        $this->assertEquals('Universiti Tunku Abdul Rahman', $edu->getInstitution());
        $this->assertEquals(2005, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2008, date_format($edu->getEnd(), 'Y'));
    }

    public function testYuanChuanKee()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor of Engineering (B.Eng.)', $edu->getLevel());
        $this->assertEquals('Chemical and Biomolecular Engineering', $edu->getCourseTitle());
        $this->assertEquals('National University of Singapore', $edu->getInstitution());
        $this->assertEquals(2007, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2011, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('GCE \'A\' Levels', $edu->getLevel());
        $this->assertEquals('Triple Science', $edu->getCourseTitle());
        $this->assertEquals('Pioneer Junior College', $edu->getInstitution());
        $this->assertEquals(2003, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2004, date_format($edu->getEnd(), 'Y'));
    }

    public function testBernardTraquena()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Computer Science', $edu->getLevel());
        $this->assertEquals('Computer Science', $edu->getCourseTitle());
        $this->assertEquals('Ateneo de Naga University', $edu->getInstitution());
        $this->assertEquals(1995, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(1999, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('Bachelor of Computer Science', $edu->getLevel());
        $this->assertEquals('Computer Science', $edu->getCourseTitle());
        $this->assertEquals('Ateneo de Naga University', $edu->getInstitution());
        $this->assertEquals(1995, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(1999, date_format($edu->getEnd(), 'Y'));
    }

    public function testNicoArianto()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor\'s Degree', $edu->getLevel());
        $this->assertEquals('Computer Science', $edu->getCourseTitle());
        $this->assertEquals('Bina Nusantara University, Jakarta', $edu->getInstitution());
        $this->assertEquals(2001, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2005, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('High School', $edu->getLevel());
        $this->assertEquals('Natural Sciences', $edu->getCourseTitle());
        $this->assertEquals('Bunda Hati Kudus', $edu->getInstitution());
        $this->assertEquals(1999, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2001, date_format($edu->getEnd(), 'Y'));
    }

    public function testJunXiuChan()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Electrical', $edu->getLevel());
        $this->assertEquals('Electronics and Communications Engineering', $edu->getCourseTitle());
        $this->assertEquals('Nanyang Polytechnic', $edu->getInstitution());
        $this->assertEquals(2009, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($edu->getEnd(), 'Y'));
    }

    public function testRandySugianto()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals(null, $edu->getLevel());
        $this->assertEquals(null, $edu->getCourseTitle());
        $this->assertEquals('Nanyang Technological University', $edu->getInstitution());
        $this->assertEquals(null, $edu->getStart());
        $this->assertEquals(null, $edu->getEnd());
    }

    public function testTingZhiLim()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor of Science (BSc)', $edu->getLevel());
        $this->assertEquals('Information Systems', $edu->getCourseTitle());
        $this->assertEquals('Singapore Management University', $edu->getInstitution());
        $this->assertEquals(2013, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2017, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('Diploma with Merit', $edu->getLevel());
        $this->assertEquals('Business Information Technology', $edu->getCourseTitle());
        $this->assertEquals('Ngee Ann Polytechnic', $edu->getInstitution());
        $this->assertEquals(2010, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2013, date_format($edu->getEnd(), 'Y'));
    }

    public function testXinyingLin()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Master\'s degree', $edu->getLevel());
        $this->assertEquals('Information Science/Studies', $edu->getCourseTitle());
        $this->assertEquals('Nanyang Technological University', $edu->getInstitution());
        $this->assertEquals(2016, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2017, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('Bachelor\'s degree', $edu->getLevel());
        $this->assertEquals('Computer Science', $edu->getCourseTitle());
        $this->assertEquals('Fuzhou University', $edu->getInstitution());
        $this->assertEquals(2008, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($edu->getEnd(), 'Y'));
    }

    public function testWillisWee()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor\'s degree', $edu->getLevel());
        $this->assertEquals('Marketing', $edu->getCourseTitle());
        $this->assertEquals('Singapore Management University', $edu->getInstitution());
        $this->assertEquals(2007, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2011, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('A level certification', $edu->getLevel());
        $this->assertEquals('Theoretical and Mathematical Physics', $edu->getCourseTitle());
        $this->assertEquals('NYJC', $edu->getInstitution());
        $this->assertEquals(2003, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2005, date_format($edu->getEnd(), 'Y'));
    }

    public function testCelineWong()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Full Stack Web Development Immersive', $edu->getLevel());
        $this->assertEquals(null, $edu->getCourseTitle());
        $this->assertEquals('General Assembly', $edu->getInstitution());
        $this->assertEquals(2016, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2016, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('Bachelor of Social Sciences', $edu->getLevel());
        $this->assertEquals('Psychology', $edu->getCourseTitle());
        $this->assertEquals('Singapore Management University', $edu->getInstitution());
        $this->assertEquals(2009, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2013, date_format($edu->getEnd(), 'Y'));
    }

    public function testWanLinCheung()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Digital Media Design', $edu->getLevel());
        $this->assertEquals('Digital Arts', $edu->getCourseTitle());
        $this->assertEquals('Nanyang Polytechnic', $edu->getInstitution());
        $this->assertEquals(2004, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2007, date_format($edu->getEnd(), 'Y'));
    }

    public function testLouisaChiew()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Business', $edu->getLevel());
        $this->assertEquals('Marketing', $edu->getCourseTitle());
        $this->assertEquals('Nanyang Technological University', $edu->getInstitution());
        $this->assertEquals(2010, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2013, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('A\' Levels', $edu->getLevel());
        $this->assertEquals(null, $edu->getCourseTitle());
        $this->assertEquals('Hwa Chong Instituition', $edu->getInstitution());
        $this->assertEquals(2009, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2010, date_format($edu->getEnd(), 'Y'));
    }

    public function testLisaTjide()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor of Engineering (B.Eng.)', $edu->getLevel());
        $this->assertEquals('Engineering Product Development', $edu->getCourseTitle());
        $this->assertEquals('Singapore University of Technology and Design', $edu->getInstitution());
        $this->assertEquals(2012, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2015, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('GCE \'A\' Level Certificate', $edu->getLevel());
        $this->assertEquals(null, $edu->getCourseTitle());
        $this->assertEquals('Tampines Junior College', $edu->getInstitution());
        $this->assertEquals(2011, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($edu->getEnd(), 'Y'));

        $edu = $education[2];
        $this->assertEquals('Science', $edu->getLevel());
        $this->assertEquals(null, $edu->getCourseTitle());
        $this->assertEquals('Beatty Secondary School', $edu->getInstitution());
        $this->assertEquals(2007, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2009, date_format($edu->getEnd(), 'Y'));
    }

    public function testSimYanTing()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor of Social Sciences (Honours)', $edu->getLevel());
        $this->assertEquals('Communications and New Media', $edu->getCourseTitle());
        $this->assertEquals('National University of Singapore', $edu->getInstitution());
        $this->assertEquals(2011, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2015, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('Journalism and Media Studies', $edu->getLevel());
        $this->assertEquals('Philosophy', $edu->getCourseTitle());
        $this->assertEquals('The University of Hong Kong', $edu->getInstitution());
        $this->assertEquals(2014, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2014, date_format($edu->getEnd(), 'Y'));

        $edu = $education[2];
        $this->assertEquals('GCE \'A\' Levels', $edu->getLevel());
        $this->assertEquals(null, $edu->getCourseTitle());
        $this->assertEquals('Catholic Junior College', $edu->getInstitution());
        $this->assertEquals(2009, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2010, date_format($edu->getEnd(), 'Y'));
    }

    public function testAndrewWang()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Bachelor of Business', $edu->getLevel());
        $this->assertEquals('Economics & Finance', $edu->getCourseTitle());
        $this->assertEquals('Singapore Institute of Management', $edu->getInstitution());
        $this->assertEquals(2007, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2011, date_format($edu->getEnd(), 'Y'));

        $edu = $education[1];
        $this->assertEquals('GCE "A" Level', $edu->getLevel());
        $this->assertEquals('Math, Chemistry, Economics', $edu->getCourseTitle());
        $this->assertEquals('Serangoon Junior College', $edu->getInstitution());
        $this->assertEquals(2003, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2004, date_format($edu->getEnd(), 'Y'));
    }

    public function testMingHaoTeoh()
    {
        $education = $this->parsePdf()->getEducation();

        $edu = $education[0];
        $this->assertEquals('Accounting', $edu->getLevel());
        $this->assertEquals('Accounting', $edu->getCourseTitle());
        $this->assertEquals('Singapore Institute of Management', $edu->getInstitution());
        $this->assertEquals(2009, date_format($edu->getStart(), 'Y'));
        $this->assertEquals(2011, date_format($edu->getEnd(), 'Y'));
    }

    public function testSharonJee()
    {
        $education = $this->parsePdf()->getEducation();

        $this->assertEmpty($education);
    }
}
