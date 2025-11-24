<?php 

require 'printfunctionfor-require.php';

/* Array Functions */

# array_chunk($array , length , preservekey(true or false)(optional)) — Split an array into chunks
$items = ['a' => 1 ,'b' => 2 ,'c' => 3 ,'d' => 4 ,'e' => 5];

prettyPrintArray(array_chunk($items,2 , true));
echo "==================================<br />";

//--------------------------------

# array_combine() — Creates an array by using one array for keys and another for its values

$array1 = ['a' ,'b' ,'c'];
$array2 = [1 ,2 ,3];

// it will throw an error if the number of elements in the 2 arrays are not the same
prettyPrintArray(array_combine($array1 , $array2));
echo "==================================<br />";

//--------------------------------

# array_filter — Filters elements of an array using a callback function

$array3 = [1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,10];

# i want to filter that array make it just even numbers 
$even = array_filter($array3 , fn($element) => $element % 2 == 0);
// reindex the array from 0
$even = array_values($even);
prettyPrintArray($even);
echo "==================================<br />";

//--------------------------------

# array_keys — Return all the keys or a subset of the keys of an array

$array4 = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 10, 'e' => 15];

$key = array_keys($array4 , 10);
prettyPrintArray($key);
echo "==================================<br />";

//--------------------------------

# array_map — Applies the callback to the elements of the given arrays

$array5 = ['a' => 1, 'b' => 2, 'c' => 3];
$array6 = ['e' => 3, 'f' => 5, 'g' => 7];

$test = array_map(fn($number1 , $number2) => $number1 * $number2 , $array5, $array6);
prettyPrintArray($test);
echo "==================================<br />";

//--------------------------------

# array_merge — Merge one or more arrays

$array7 = [1, 2 ,3];
$array8 = ['a' => 4, 'b' => 5 , 'c' => 6];
$array9 = [7, 8 ,'b' => 9];

$merged = array_merge($array7 , $array8 , $array9);
prettyPrintArray($merged);
echo "==================================<br />";









