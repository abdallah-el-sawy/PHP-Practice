<?php

/* Functions */

// function parameters
// the x and y here are called parameters
function multi(int|float $x , int|float $y = 10){
  return $x * $y;
}

// but 5.6 , 9 here is called arguments
echo multi(5.6) . "<br />";
echo multi(5.6 , 9) . "<br />";

#------------------------------------------------------------------------------------------------------------------------

//Variadic Functions
# here i want to sum many numbers but i don't know how many they are so we use ...$something 
# it's array storing this values
function sum(...$numbers): int|float{

//instead of all of that you can use built in function called array_sum($numbers)
  $sum = 0;
  foreach($numbers as $number){
    $sum += $number;
  }

  return $sum;
}

echo sum(6 , 7 , 8 ,10 ,600 , 900,1000) . "<br />";//2531

// unpacking

$a = 6;
$b = 10;
$array = [50 , 30 , 10 , 2 , 1 , 0];

// we can't pass the whole array as a parameter instead we put before it "..." this will unpack the element of the array 
echo sum($a , $b , ...$array); //109
#------------------------------------------------------------------------------------------------------------------------

























