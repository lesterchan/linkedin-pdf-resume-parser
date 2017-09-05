# Tech in Asia LinkedIn PDF Resume Parser

[![Build Status](https://travis-ci.org/techinasia/linkedin-pdf-resume-parser.svg?branch=master)](https://travis-ci.org/techinasia/linkedin-pdf-resume-parser)

This library parses LinkedIn PDF resume and extracts out the name, email, summary, work experiences and education history.

## Installation
```bash
$ composer require techinasia/linkedin-pdf-resume-parser:dev-master
```
## Usage

```php
$resumeParser = new \LinkedInResumeParser\Parser();
$parsedResume = $resumeParser->parse('/path/to/resume.pdf');

echo $parsedResume->getName();

echo $parsedResume->getCurrentRole()->getOrganisation();
// The Drum

echo $parsedResume->getCurrentRole()->getStart()->format('F, Y');
// August, 2016

foreach ($parsedResume->getSkills() as $skill) {
    echo $skill;
    // PHP
    // Git
    // ...
}

foreach ($parsedResume->getEducationEntries() as $educationEntry) {
    echo $educationEntry->getInstitution();
    // University of Strathclyde
}
```

## Test
```bash
$ phpunit
```

## Credits
Props to [ver1000000](https://github.com/ver1000000/linkedin-resume-parser) and [Persata](https://github.com/Persata/linkedin-resume-parser).