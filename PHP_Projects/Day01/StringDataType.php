<?php

/* Strings */

$firstname = 'Abdallah';
$lastname = "Elsawy";

$name = $firstname . " " . $lastname; 
echo $name . "<br />"; // Abdallah Elsawy
// Say Now i want to access the letter "b" in Abdallah
// it's like array we starting with index 0 
echo $name[1] . "<br>"; // b

// and if we want to acces the word from the back we type negative numbers
// starts with -1

echo $name[-1] . "<br />"; // y

// we also can override the letters in the words 
// like if i want to make the letter "E" In Elsawy small 

$name[9] = 'e';

echo $name . "<br />"; // Abdallah elsawy



echo "<br />";
//-----------------------------------------------------------------------

// there are also 2 ways to represent the string addional with "" and ''

// Those are used to represent the long ,  multiple line  and complex strings 

// Heredoc -> Treats string if it is like in double quotes ""
// here you can have variables 



$x = 1;
$y = 2;
$z = 3; 

//synatx
$text = <<<TEXT
Line $x
Line $y
Line $z
TEXT;

echo nl2br($text) . "<br />";

// note nl2br() is a function
// which convert the new line to <br /> so the browser can make a new line 


// Nowdoc -> Treats string if it is like in single quotes ''
// here you can't have variables

// same syntax as heredoc but variables doesn't work

$text = <<<'TEXT'
Line $x
Line $y
Line $z
TEXT;

echo nl2br($text);


// summary 
/*
Heredoc and Nowdoc are usefull in long speech that has a lot of scaping charcters 
because here in those there is no need to escape any thing you just type it and it will appear
easily 

*/

echo "<br />";
echo "<br />";

//extra

$speech = <<< SPEECH
Hello World
SPEECH;

$talk = <<< TALK
    Hello World
TALK;

var_dump($speech); // string(11) "Hello World"
echo "<br />";
var_dump($talk); //string(15) " Hello World"
echo "<br />";

// the usecase here is when we add extra spaces 
//it doesn't appear in the browser but it actually count like it's there