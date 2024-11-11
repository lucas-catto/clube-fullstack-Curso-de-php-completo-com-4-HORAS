<?php

/*
$name = 'taylor';
echo $name;

$name = 'otwell';
echo $name;
*/

/*
define('NAME', 'taylor');
echo NAME;
*/

/*
function test() {
    echo __FUNCTION__;
    echo __METHOD__;
}

test();
*/

// echo DIRECTORY_SEPARATOR;

/*
define('NAME', 'taylor');

if (defined('NAME')) {
    echo 'defined.';
}

if (defined('NAME2')) {
    echo 'defined.';
}
*/

$const = get_defined_constants(true);

echo "<pre>";
var_dump($const);
echo "</pre>";
