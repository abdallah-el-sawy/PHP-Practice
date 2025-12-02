<?php

// NULL 

// null constant
$x = null; // null here is case insensitive so it can be NULL etc...

var_dump($x); // NULL
echo "<br />";

// we can also check if the value is null by using is_null() function
var_dump(is_null($x)); //bool(true)
echo "<br />";

// there is also another way to check by using " ===" comparator
var_dump($x === null); //bool(true)
echo "<br />";


//==================================================
// the variable can be null if it's not defined yet|
//=================================================|

// here you will get an error but still the result is bool(true)
// that means that the undefined variable's value is null
var_dump(is_null($y));
echo "<br />";


// there is also another way that the value can be null
// by unset() the variable

$number = 123;

unset($number); // here it's destroying that variable

// here it will print an error but also give you the null 
var_dump(is_null($number)); // bool(true)
echo "<br />";


// casting in null

$num = null;

// here it will print empty string
// if it's int it will be 0
// bool it will false 
// array it will be an empty array
var_dump((string) $num); // string(0) ""
echo "<br />";





