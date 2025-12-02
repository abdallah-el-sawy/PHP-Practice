<?php

/* Functions */

// we can use it to print something
function greetings(){
  echo "Hello,World<br />";
}

// we can return something to use it
function SayHi(){
  return 'HI';
}

// you can specify expected data types
function number(): int|float|array{
  return [2];
}

// any data type
function value(): mixed {
  return 1.5;
}


// call section
greetings();
echo SayHi() . "<br />";

$x = number();
echo "<pre>";
print_r($x);
echo "</pre>";

var_dump(value());

