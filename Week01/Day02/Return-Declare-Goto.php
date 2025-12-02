<?php 

// return - declare - goto

// return
function sum(int $x , int $y){
  $z = $x + $y;
  // return here will stop the execution of the function only
  return $z;
}

// so here the rest of the code will be printed normally
echo sum(10,5) . "<br />";
# if we have a return here the rest of the script below it won't execute so the output will only 15
#return;
echo "hello world" . "<br />";


//--------------------------------------------------------------------------------------------------------------

// declare

# declare - ticks
function onTick(){
  echo "Tick<br />";
}

register_tick_function('onTick');

declare(ticks = 1);

for($i = 0; $i <= 5; $i++){
  echo $i . "<br />";
}

//-----------------------------------------------------------

# declare - encoding -> no need for now

//-----------------------------------------------------------

# delcare - strict_types

declare(strict_types=1);

function add(int $x , int $y){
  return $x + $y;
}

// here it will get you an error because the fuction return integers and the entries here are strings
//echo add('5' , '15');

