<?php 

/* Error-Handling */

/* 
== Error anatomy 
1) error name
2) error message
3) error file
4) error line
*/

// Types of errors: Notice, Warning, Fatal Error, Parse Error

// warning error  , notice error
# doesn't stop the script execution

// fatal error -> critical error  , parse error
# stops the script execution

// warning error
# like including a file that does not exist
# the code is not stopped
include('sawy.php');
echo 1;


// notice error 
$name = "abdallah";
echo $namee; // undefined variable, notice error
echo 1;


// parse error 
# stops the script execution
# echo 'abdallah'


// fatal error 
function greetings(){
  echo 'hello';
}

# hello(); // i called a function that does not exist, fatal error



