<?php

// we can handle the error structure by creating a function -> error handler

// function error_handler($level , $message , $file , $line){
//   echo "Error Level: " . $level . "<br />";
//   echo "Error Message: " . $message . "<br />";
//   echo "Error file: " . $file . "<br />";
//   echo "Error line: " . $line . "<br />";

//   die;
// }


// you can use a normal function or anonymous function it doesn't matter

set_error_handler(function($level , $message , $file , $line){
  echo "Error Level: " . $level . "<br />";
  echo "Error Message: " . $message . "<br />";
  echo "Error file: " . $file . "<br />";
  echo "Error line: " . $line . "<br />";
});

echo $x;

/*
Output:

Error Level: 2
Error Message: Undefined variable $x
Error file: C:\xampp\htdocs\PHP_Projects\Week01\Day03\ErrorHandler.php
Error line: 16

*/


