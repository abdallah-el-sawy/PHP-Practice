<?php

# Arrays 

# indexed arrays start with index "0"
$ProgrammingLanguages_Indexed = ['PHP' , 'JAVA' , 'CPP']; 
# another syntax
# $Programming_Languages = array('PHP' , 'JAVA' , 'CPP'); 

# Here we can access array elements by index 
echo $ProgrammingLanguages_Indexed[0] . "<br />"; # PHP

# In arrays we can't type index -1 to get the final element in array like strings
#echo $ProgrammingLanguages[-1] . "<br />"; # warning

# also if we tried to access index that is not found warning will apear as well

# if we wanted to check if the index contain element we can bu using isset()
var_dump(isset($ProgrammingLanguages_Indexed[3])); # bool(false)
echo "<br />";


# we can also change the value in the index we want 
# like if i wanted to change JAVA to PYTHON
$ProgrammingLanguages_Indexed[1] = 'PYTHON';
echo $ProgrammingLanguages_Indexed[1] . "<br />"; # PYTHON

# we also print the whole array by using print_r()
# using <pre></pre> can handle the array structure in browser
echo '<pre>';
print_r($ProgrammingLanguages_Indexed);
echo '</pre>';


# count() function returns the number of array elements
echo count($ProgrammingLanguages_Indexed) . "<br />"; # 3


# there is 2 ways to push element onto the end of the array
$ProgrammingLanguages_Indexed [] = 'GO';

# The other way by using array_push($array , the value you want to add) function
array_push($ProgrammingLanguages_Indexed , 'JavaScript' , 'HTML');

echo "<pre>";
print_r($ProgrammingLanguages_Indexed);
echo '</pre>';

echo "=======================================================<br />";
#-------------------------------------------------------------------------------------------------- */

# Associative Arrays

$Programming_Languages_Associative = [
  'PHP' => 8.0,
  'GO' => 5.6,
  'RUST' => 6.0
];

echo '<pre>';
print_r($Programming_Languages_Associative);
echo '</pre>';

# Here we can redefine the key of the array 
# we can access the array elements by the key 

echo $Programming_Languages_Associative['PHP'] . "<br />"; # 8.0

# we can also here add new element in the array like that
$Programming_Languages_Associative['Python'] = 9.6;

echo '<pre>';
print_r($Programming_Languages_Associative);
echo '</pre>';

echo "=======================================================<br />";
#--------------------------------------------------------------------------------------------------

# Multi-dimensional Arrays
$Programming_Languages_Multidimensional = [
  'PHP' => [
      'Creator' => 'Abdallah',
      'OpenSource' => true,
      'Versions' =>[
                    ['Version' => 8 , 'ReleaseDate' => 'NOV 26 , 2020'],
                    ['Version' => 7.4 , 'ReleaseDate' => 'NOV 28 , 2019']
                ]
      ],

    'Python' =>  [
      'Creator' => 'Elsawy',
      'OpenSource' => true,
      'Versions' =>[
                    ['Version' => 8.6 , 'ReleaseDate' => 'NOV 26 , 2021'],
                    ['Version' => 7.9 , 'ReleaseDate' => 'NOV 28 , 2018']
                  ]
      ],

  
];


echo '<pre>';
print_r($Programming_Languages_Multidimensional);
echo '</pre>';


# say like now we want to access version 7.9 in pyton
echo $Programming_Languages_Multidimensional['Python']['Versions'][1]['Version'] ."<br />"; #7.9

echo "=======================================================<br />";
#--------------------------------------------------------------------------------------------------

# IF we have dublicated index in our array like
$array = ['0' => 'Abdallah' , '1' => "Elsawy" , "1" => "Esmail"];
# The last index in the duplicate will override the first one
# so here index 1 will be Esmail 

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<br />";
#----------------------------------------------------------------------------

# if we want to remove elements from any type of arrays by using array_pop() function
# array_pop() returns the last element of the array and remove it from the array 
# here it will return Esmail and remove it from the array
echo array_pop($array);

# the array will be only index 0 => 'Abdallah'
echo '<pre>';
print_r($array);
echo '</pre>';

echo "<br />";


# there are also another ways to remove an element from the array by using array_shift() function
# basically it will return the first element of the array and remove it from the array
# and reindex the array again 

$array_test = [ 1, 2 , 3 ,4 ,5];

echo array_shift($array_test) . "<br />";

# index 0 => 2 and the value 1 will be removed from the array
echo '<pre>';
print_r($array_test);
echo '</pre>';

echo "<br />";


# we also can use unset() function to remove elements from the array 
# even to destroy the whole array if we wanted to , you can also remove multiple elements at once
# so i will remove index 0 which is now 2  and index 1 which is 3
# here the array is not reindexed again like array_shift() function
unset($array_test[0] , $array_test[1]);

# it will give us array with just index 2 => 4 , index 3 => 5 
echo '<pre>';
print_r($array_test);
echo '</pre>';

echo "=======================================================<br />";
#--------------------------------------------------------------------------------------------------

# Type casting in arrays
$x = 5;

# it will return an array with index 0 => 5
var_dump((array) $x);

echo "<br />";

#--------------------------------------------------------------------------------------------------

# there is a way to check if the key is exist or no by using array_key_exist() function
$array2 = ['a' => 1 , 'b' => null];

var_dump(array_key_exists('a' , $array2)); // bool(true)
echo "<br />";

var_dump(isset($array2['b'])); // bool(flase)
echo "<br />";

#--------------------------------------------------------------------------------------------------









