# Tech in Asia LinkedIn PDF Resume Parser

[![Build Status](https://travis-ci.org/techinasia/linkedin-pdf-resume-parser.svg?branch=master)](https://travis-ci.org/techinasia/linkedin-pdf-resume-parser)

This library parses LinkedIn PDF resume and extracts out the name, email, summary, work experiences and education history.

## Installation
```bash
$ composer require techinasia/linkedin-pdf-resume-parser:dev-master
```
## Usage

```php
// Init
$resumeParser = new \LinkedInResumeParser\Parser();
$parsedResume = $resumeParser->parse('/path/to/resume.pdf');
 
// Get Name
echo $parsedResume->getName();
 
// Get Email
echo $parsedResume->getEmail();
 
// Get LinkedIn Profile URL
echo $parsedResume->getUrl();
 
// Get Summary
echo $parsedResume->getSummary();
 
// Get Work Experiences
$experiences = $parsedResume->getExperiences();
if (count($experiences) > 0) {
    foreach ($experiences as $experience) {
        echo $experience->getTitle() . ' at ' . $experience->getOrganisation() . ' (' . date_format($experience->getStart(), 'F Y') . ' - ' . date_format($experience->getEnd(), 'F Y') . ')';
    }
}
 
// Get Education
$education = $parsedResume->getEducation();
if (count($education) > 0) {
    foreach ($education as $edu) {
        echo $edu->getLevel() . ', ' . $edu->getCourseTitle() . ' at ' . $edu->getInstitution() . ' (' . date_format($edu->getStart(), 'Y') . ' - ' . date_format($edu->getEnd(), 'Y') . ')';
    }
}
```

## Test
```bash
$ phpunit
```

## Credits
Props to [ver1000000](https://github.com/ver1000000/linkedin-resume-parser) and [Persata](https://github.com/Persata/linkedin-resume-parser).