<?php

// Scope Variable

$x = 5;

function test(){
  // $x here is not defined in this local scope , it is defined in the global scope
  // if we want to access it you can do it in 2 ways 
  // global keyword
  // global $x;
  // or with SUPER GLOBAL -> $GLOBALS[] -> which is array that php stores the global variable in 
  // the name of the variable is the key -> and the value of the variable is its value
  $GLOBALS['x'];  
  $x = 10;
  echo $x . "<br />";
}

test();//10


// Static Variable

# the difference between static and regular variable is : regular variables get destroyed outside its scope
# while the static does not get destoryed and keep its value

function getValue(){
  static $value = null;

  if($value == null){
    $value = someVeryExpensiveFunction();
  }

  return $value;
}

function someVeryExpensiveFunction(){
  sleep(2);
  return 10;
}

echo getValue() . "<br />";
echo getValue() . "<br />";
echo getValue() . "<br />";
