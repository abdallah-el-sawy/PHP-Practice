<?php


/* Variable, Anonymous, Callable, Closure & Arrow Functions In PHP  */

# variable function

function sum(int|float ...$numbers):int|float{
  return array_sum($numbers);
}

$x = 'sum';

echo sum(1,2, 3, 4) . "<br />";//10

# if the variable has the same function name we can type it like that
# but if there isn't any function like that it will throw an error so to avoid that there is a function called is_callable()
# is_callable() function checks if there is any function has the same name as this variable or not so we can do this 
if(is_callable($x)){
  echo $x(1,2,3,4) . "<br />";//10
} else{
  echo "Not Callable" . "<br />";
}

#---------------------------------------------------------------------------------------------------------------------------------

# Anonymous Functions -> lambda functions -> needs ; at the end of it
# the function that can access variables outside its scope is called -> closure
$y = 1;
# you can access a regular variable from inside the anonymous funtion by using use(the variable you want to access)
# the variable here will be passed by value if you want to pass it by reference just add "&"
$sum = function (int|float ...$numbers) use(&$y):int|float{
  $y = 10;
  echo $y . "<br />";
  return array_sum($numbers);
};

echo $sum(1,2,3,4) . "<br />";
echo $y ."<br />";

#---------------------------------------------------------------------------------------------------------------------------------

// callback function 

$array1 = [1,2,3,4];
$x = function($elements){
  return $elements * 2;
};
$array2 = array_map($x , $array1);

print_r($array2);

#---------------------------------------------------------------------------------------------------------------------------------

// arrow function
# if we defined a variable in the parent scope you can access it in arrow function easily without using any keyword or function
# but you cannot change its value 
# also arrow function can contain a single expression so you cannot type  multiple expressions. 
$y = 2;
$array = [1,2,3,4];
$array3 = array_map(fn($elements) => $elements * $elements * $y, $array);

// squre of the elements
echo "<pre>";
print_r($array3);
echo "</pre>";