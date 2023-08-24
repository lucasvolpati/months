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

output: 

<select id='month' class='form-control' name='reference_month'> 
    <option value='1'>Janeiro</option>
    <option value='2'>Fevereiro</option>
    ...
</select>
````

### Construct params
#### First parameter is language - 'pt_br' is default
You can change the months language to english, bypassing 'en_us'

````
<?php
    include __DIR__ . '/vendor/autoload.php';

    use Months\Html\Generator;

    echo (new Generator('en_us'))->monthsSelectGenerator(
        'month', //id attribute
        'form-control', //classes
        'reference_month'); //name attribute

?>
````

#### Second parameter is month string format - 'full' is default
You can change to 'small' to get brev months names, example:

````
<?php
    include __DIR__ . '/vendor/autoload.php';

    use Months\Html\Generator;

    echo (new Generator('pt_br', 'small'))->monthsSelectGenerator(
        'month', //id attribute
        'form-control', //classes
        'reference_month'); //name attribute

?>

output: 

<select id='month' class='form-control' name='reference_month'> 
    <option value='1'>Jan</option>
    <option value='2'>Fev</option>
    ...
</select>
````

#### Third parameter is value format - 'number' is default
You can change to 'string', example:

````
<?php
    include __DIR__ . '/vendor/autoload.php';

    use Months\Html\Generator;

    echo (new Generator('pt_br', 'small', 'string'))->monthsSelectGenerator(
        'month', //id attribute
        'form-control', //classes
        'reference_month'); //name attribute

?>

output: 

<select id='month' class='form-control' name='reference_month'> 
    <option value='jan'>Jan</option>
    <option value='fev'>Fev</option>
    ...
</select>
````

### Others parameters
You can use more two attributes on principal function, _currentSelected_ and _dataAtributes_, example:

````
<?php
    include __DIR__ . '/vendor/autoload.php';

    use Months\Html\Generator;

    echo (new Generator())->monthsSelectGenerator(
        'month', //Id attribute
        'form-control', //Classes
        'reference_month', //Name attribute
        true, //If you want to set the current month option to selected
        [
            "data-some='anything'",
            "data-click='getYear'"
            ...
        ] //add data attributes, as many as you need in this format
        ); 

?>

output: 

<select id='month' class='form-control' name='reference_month' data-some='anything' data-click='getYear'> 
    <option value='jan'>Jan</option>
    <option value='fev'>Fev</option>
    ...
</select>
````

## Credits
- [Lucas Alcantara Rodrigues Volpati](https://github.com/lucasvolpati) (Developer)

## License

The MIT License (MIT).