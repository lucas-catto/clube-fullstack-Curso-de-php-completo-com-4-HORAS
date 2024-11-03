<?php

// string
echo gettype('text') ."\n";

// number => int, float/double
echo gettype(12) ."\n";
echo gettype(12.34) ."\n";

// boolean
echo gettype(false) ."\n";
echo gettype(true) ."\n";

// array
echo gettype([0, 1, 2, 3, 'php']) ."\n";

// object
class Person
{

}
echo gettype(new Person) ."\n";

// null
echo gettype(null) ."\n";

/* ******** */
$name = 'Taylor Otwell';
echo $name ."\n";

echo gettype($name) ."\n";

/* ******** */
// camelCase
// snake_case

/* ******** */
$person = 'Taylor Otwell';

$_person = &$person;

$person = 'Rasmus Lerdorf';

echo $person ."\n";;
echo $_person ."\n";;
