# Get Months Component
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