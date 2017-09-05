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
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor of Computing (Honors)', $educationEntry->getLevel());
        $this->assertEquals('Information Systems, Specialized in Services Science, Management and Engineering (SSME)', $educationEntry->getCourseTitle());
        $this->assertEquals('National University of Singapore', $educationEntry->getInstitution());
        $this->assertEquals(2006, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2010, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('Diploma in Multimedia Technology', $educationEntry->getLevel());
        $this->assertEquals('Singapore Polytechnic', $educationEntry->getInstitution());
        $this->assertEquals(2001, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2004, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testMelvinLee()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor\'s Degree', $educationEntry->getLevel());
        $this->assertEquals('Computing (Honours, Second Upper) in Communications and Media, Computer Science', $educationEntry->getCourseTitle());
        $this->assertEquals('National University of Singapore', $educationEntry->getInstitution());
        $this->assertEquals(2010, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2015, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('Diploma in Digital Media (Merit)', $educationEntry->getLevel());
        $this->assertEquals('Singapore Polytechnic', $educationEntry->getInstitution());
        $this->assertEquals(2005, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2009, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testKwongHowOng()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor\'s Degree', $educationEntry->getLevel());
        $this->assertEquals('Computer Engineering', $educationEntry->getCourseTitle());
        $this->assertEquals('National University of Singapore', $educationEntry->getInstitution());
        $this->assertEquals(2008, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testLimCheeAun()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor', $educationEntry->getLevel());
        $this->assertEquals('Computer Engineering', $educationEntry->getCourseTitle());
        $this->assertEquals('Universiti Tunku Abdul Rahman', $educationEntry->getInstitution());
        $this->assertEquals(2005, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2008, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testYuanChuanKee()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor of Engineering (B.Eng.)', $educationEntry->getLevel());
        $this->assertEquals('Chemical and Biomolecular Engineering', $educationEntry->getCourseTitle());
        $this->assertEquals('National University of Singapore', $educationEntry->getInstitution());
        $this->assertEquals(2007, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2011, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('GCE \'A\' Levels', $educationEntry->getLevel());
        $this->assertEquals('Triple Science', $educationEntry->getCourseTitle());
        $this->assertEquals('Pioneer Junior College', $educationEntry->getInstitution());
        $this->assertEquals(2003, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2004, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testBernardTraquena()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Computer Science', $educationEntry->getLevel());
        $this->assertEquals('Computer Science', $educationEntry->getCourseTitle());
        $this->assertEquals('Ateneo de Naga University', $educationEntry->getInstitution());
        $this->assertEquals(1995, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(1999, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('Bachelor of Computer Science', $educationEntry->getLevel());
        $this->assertEquals('Computer Science', $educationEntry->getCourseTitle());
        $this->assertEquals('Ateneo de Naga University', $educationEntry->getInstitution());
        $this->assertEquals(1995, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(1999, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testNicoArianto()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor\'s Degree', $educationEntry->getLevel());
        $this->assertEquals('Computer Science', $educationEntry->getCourseTitle());
        $this->assertEquals('Bina Nusantara University, Jakarta', $educationEntry->getInstitution());
        $this->assertEquals(2001, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2005, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('High School', $educationEntry->getLevel());
        $this->assertEquals('Natural Sciences', $educationEntry->getCourseTitle());
        $this->assertEquals('Bunda Hati Kudus', $educationEntry->getInstitution());
        $this->assertEquals(1999, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2001, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testJunXiuChan()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Electrical', $educationEntry->getLevel());
        $this->assertEquals('Electronics and Communications Engineering', $educationEntry->getCourseTitle());
        $this->assertEquals('Nanyang Polytechnic', $educationEntry->getInstitution());
        $this->assertEquals(2009, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testRandySugianto()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals(null, $educationEntry->getLevel());
        $this->assertEquals(null, $educationEntry->getCourseTitle());
        $this->assertEquals('Nanyang Technological University', $educationEntry->getInstitution());
        $this->assertEquals(null, $educationEntry->getStart());
        $this->assertEquals(null, $educationEntry->getEnd());
    }

    public function testTingZhiLim()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor of Science (BSc)', $educationEntry->getLevel());
        $this->assertEquals('Information Systems', $educationEntry->getCourseTitle());
        $this->assertEquals('Singapore Management University', $educationEntry->getInstitution());
        $this->assertEquals(2013, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2017, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('Diploma with Merit', $educationEntry->getLevel());
        $this->assertEquals('Business Information Technology', $educationEntry->getCourseTitle());
        $this->assertEquals('Ngee Ann Polytechnic', $educationEntry->getInstitution());
        $this->assertEquals(2010, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2013, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testXinyingLin()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Master\'s degree', $educationEntry->getLevel());
        $this->assertEquals('Information Science/Studies', $educationEntry->getCourseTitle());
        $this->assertEquals('Nanyang Technological University', $educationEntry->getInstitution());
        $this->assertEquals(2016, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2017, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('Bachelor\'s degree', $educationEntry->getLevel());
        $this->assertEquals('Computer Science', $educationEntry->getCourseTitle());
        $this->assertEquals('Fuzhou University', $educationEntry->getInstitution());
        $this->assertEquals(2008, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testWillisWee()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor\'s degree', $educationEntry->getLevel());
        $this->assertEquals('Marketing', $educationEntry->getCourseTitle());
        $this->assertEquals('Singapore Management University', $educationEntry->getInstitution());
        $this->assertEquals(2007, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2011, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('A level certification', $educationEntry->getLevel());
        $this->assertEquals('Theoretical and Mathematical Physics', $educationEntry->getCourseTitle());
        $this->assertEquals('NYJC', $educationEntry->getInstitution());
        $this->assertEquals(2003, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2005, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testCelineWong()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Full Stack Web Development Immersive', $educationEntry->getLevel());
        $this->assertEquals(null, $educationEntry->getCourseTitle());
        $this->assertEquals('General Assembly', $educationEntry->getInstitution());
        $this->assertEquals(2016, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2016, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('Bachelor of Social Sciences', $educationEntry->getLevel());
        $this->assertEquals('Psychology', $educationEntry->getCourseTitle());
        $this->assertEquals('Singapore Management University', $educationEntry->getInstitution());
        $this->assertEquals(2009, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2013, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testWanLinCheung()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Digital Media Design', $educationEntry->getLevel());
        $this->assertEquals('Digital Arts', $educationEntry->getCourseTitle());
        $this->assertEquals('Nanyang Polytechnic', $educationEntry->getInstitution());
        $this->assertEquals(2004, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2007, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testLouisaChiew()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Business', $educationEntry->getLevel());
        $this->assertEquals('Marketing', $educationEntry->getCourseTitle());
        $this->assertEquals('Nanyang Technological University', $educationEntry->getInstitution());
        $this->assertEquals(2010, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2013, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('A\' Levels', $educationEntry->getLevel());
        $this->assertEquals(null, $educationEntry->getCourseTitle());
        $this->assertEquals('Hwa Chong Instituition', $educationEntry->getInstitution());
        $this->assertEquals(2009, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2010, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testLisaTjide()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor of Engineering (B.Eng.)', $educationEntry->getLevel());
        $this->assertEquals('Engineering Product Development', $educationEntry->getCourseTitle());
        $this->assertEquals('Singapore University of Technology and Design', $educationEntry->getInstitution());
        $this->assertEquals(2012, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2015, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('GCE \'A\' Level Certificate', $educationEntry->getLevel());
        $this->assertEquals(null, $educationEntry->getCourseTitle());
        $this->assertEquals('Tampines Junior College', $educationEntry->getInstitution());
        $this->assertEquals(2011, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2012, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[2];
        $this->assertEquals('Science', $educationEntry->getLevel());
        $this->assertEquals(null, $educationEntry->getCourseTitle());
        $this->assertEquals('Beatty Secondary School', $educationEntry->getInstitution());
        $this->assertEquals(2007, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2009, date_format($educationEntry->getEnd(), 'Y'));
    }

    public function testSimYanTing()
    {
        $educationEntries = $this->parsePdf()->getEducation();

        $educationEntry = $educationEntries[0];
        $this->assertEquals('Bachelor of Social Sciences (Honours)', $educationEntry->getLevel());
        $this->assertEquals('Communications and New Media', $educationEntry->getCourseTitle());
        $this->assertEquals('National University of Singapore', $educationEntry->getInstitution());
        $this->assertEquals(2011, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2015, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[1];
        $this->assertEquals('Journalism and Media Studies', $educationEntry->getLevel());
        $this->assertEquals('Philosophy', $educationEntry->getCourseTitle());
        $this->assertEquals('The University of Hong Kong', $educationEntry->getInstitution());
        $this->assertEquals(2014, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2014, date_format($educationEntry->getEnd(), 'Y'));

        $educationEntry = $educationEntries[2];
        $this->assertEquals('GCE \'A\' Levels', $educationEntry->getLevel());
        $this->assertEquals(null, $educationEntry->getCourseTitle());
        $this->assertEquals('Catholic Junior College', $educationEntry->getInstitution());
        $this->assertEquals(2009, date_format($educationEntry->getStart(), 'Y'));
        $this->assertEquals(2010, date_format($educationEntry->getEnd(), 'Y'));
    }
}