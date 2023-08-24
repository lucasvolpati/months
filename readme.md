# Get Months Component
[![Maintainer](http://img.shields.io/badge/maintainer-@lucasvolpati-blue.svg?style=flat-square)](https://www.linkedin.com/in/lucas-volpati/)
[![Source Code](http://img.shields.io/badge/source-lucasvolpati/months-blue.svg?style=flat-square)](https://github.com/lucasvolpati/months)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/lucasvolpati/months.svg?style=flat-square)](https://packagist.org/packages/lucasvolpati/months)
[![Latest Version](https://img.shields.io/github/release/lucasvolpati/months.svg?style=flat-square)](https://github.com/lucasvolpati/months/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Quality Score](https://img.shields.io/scrutinizer/g/lucasvolpati/months.svg?style=flat-square)](https://scrutinizer-ci.com/g/lucasvolpati/months)
[![Total Downloads](https://img.shields.io/packagist/dt/lucasvolpati/months.svg?style=flat-square)](https://packagist.org/packages/lucasvolpati/months)
Small, simple and uncomplicated. This is a HTML generator, where you can generate a SELECT elements months lists, with some little lines in your project.
## Installation
````
"lucasvolpati/months": "1.0.*"
````
or run
````
composer require lucasvolpati/months
````
## Documentation

````
<?php
    include __DIR__ . '/vendor/autoload.php';

    use Months\Html\Generator;

    echo (new Generator())->monthsSelectGenerator(
        'month', //id attribute
        'form-control', //classes
        'reference_month'); //name attribute

?>
````