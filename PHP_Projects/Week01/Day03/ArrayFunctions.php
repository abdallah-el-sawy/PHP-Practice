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

//--------------------------------

# array_reduce — Iteratively reduce the array to a single value using a callback function

$invoiceItems =[ 
['price' => 9.99 , 'qty' => 3 , 'desc' => 'Item1'],
['price' => 29.99 , 'qty' => 1 , 'desc' => 'Item2'],
['price' => 149 , 'qty' => 3 , 'desc' => 'Item3'],
['price' => 14.99 , 'qty' => 3 , 'desc' => 'Item4'],
['price' => 4.99 , 'qty' => 3 , 'desc' => 'Item5'],
];

$reduce = array_reduce($invoiceItems, fn($total , $item) => $total + ($item['price'] * $item['qty']) , 0 );
echo "The total price:  " . $reduce . "<br />";
echo "==================================<br />";

//--------------------------------

# array_search — Searches the array for a given value and returns the first corresponding key if successful
$arr = ['a' , 'b' , 'c' , 'd' , 'e' ,'10' , 'cd'];
prettyPrintArray($arr);

if(!in_array('10', $arr , true)){
  echo "Value '10' not found in the array. <br />";
} else {
  echo array_search('10' , $arr , true) . "<br />";
}

echo "==================================<br />";

//--------------------------------

# array_diff — Computes the difference of arrays
// compares the 1st array to the 2nd and third and print the unmatched values
$arr1 = ['a' => 1 , 'b' => 2 , 'c' => 3 , 'd' => 4];
$arr2 = ['e' => 3 , 'f' => 5 , 'g' => 6 , 'h' => 7];
$arr3 = ['i' => 8 , 'd' => 4 , 'k' => 9 , 'l' => 10];

echo "array_diff:<br />";
prettyPrintArray(array_diff($arr1 , $arr2 , $arr3));

echo "array_diff_key:<br />";
# array_diff_key — Computes the difference of arrays using keys for comparison
#✔ Compares keys only
#✖ Ignores values completely
prettyPrintArray(array_diff_key($arr1 , $arr2 , $arr3));

echo "array_diff_assoc:<br />";
# array_diff_assoc — Computes the difference of arrays with additional index check
# the strict type of array_diff
#✔ Compares keys AND values
#✔ Only returns elements that differ by key OR value
prettyPrintArray(array_diff_assoc($arr1 , $arr2 , $arr3));

echo "==================================<br />";

//--------------------------------

# asort — Sort an array in ascending order and maintain index association
# sort just the values.
$arr4 = ['d' => 3 , 'b' => 1 , 'c' => 4 , 'a' => 2];
echo "Before sorting:<br />";
prettyPrintArray($arr4);

# sort just the values in ascending order
echo "After sorting values:<br />";
asort($arr4);
prettyPrintArray($arr4);

echo "After sorting keys:<br />";
# if you want to sort the keys we can use ksort
ksort($arr4);
prettyPrintArray($arr4);

# custom sort by usort
# the defined keys will be removed and the array will be reindexed
echo "Custom sort by usort:<br />";
usort($arr4 , fn($a , $b) => $a <=> $b);
prettyPrintArray($arr4);
echo "==================================<br />";

// list — Assign variables as if they were an array

# we have 2 different types of syntax to the list
$arr5 = [1 , 2 , 3 , 4];
$arr6 = [1 , 2 , 3 , 4];

# you can use index keyed and unkeyed arrays but you cannot mix them(unkeyed)
list($a , $b , $c , $d) = $arr5;

# here $e variable will contain 2 , $f will contain 1 , $g will contain 4 , $h will contain 3(keyed)
[1 => $e , 0 => $f , 3 => $g  ,2 => $h] = $arr6;

echo $a . ", " . $b . ", " . $c . ", " . $d . "<br />"; //1, 2, 3, 4
echo $e . ", " . $f . ", " . $g . ", " . $h . "<br />"; //2, 1, 4, 3

echo "==================================<br />";





