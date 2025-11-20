<?php

# Operators


  # Arthimetic Operators(+ , -, *, /, % ,**)
    $x = 10;
    $y = 2;

    echo "$x + $y = "  . $x + $y . "<br />"; //12
    echo "$x - $y = "  . $x - $y . "<br />"; //8
    echo "$x * $y = "  . $x * $y . "<br />"; //20
    echo "$x / $y = "  . $x / $y . "<br />"; // 5
    echo "$x % $y = "  . $x % $y . "<br />"; // 0
    echo "$x ** $y = "  . $x ** $y . "<br />"; // 100

# --------------------------------------------------------------------------------------------------------    

  # Assignment Operators(= , +=, -=, *=, /=, %=, **=)
    $number = 3;
    $number += 2;
    echo $number . "<br />"; // 5
    $number *= 2; 
    echo $number . "<br />"; // 10

# --------------------------------------------------------------------------------------------------------    

  # String Operators(. , .=)  
    $fullname = 'Abdallah';
    # $fullname  = $fullname . " " . "Elsawy"; 
    $fullname .= " " . " Elsawy";
    echo $fullname . "<br />"; //Abdallah Elsawy

# --------------------------------------------------------------------------------------------------------    


  # Comparison Operators (== === != <> !== < > <= >= <==> ?? ?:)
    var_dump(5 == '5');
    echo "<br />";
# The difference between == and === is that === is comparing the value and the data type
# While == comparing only the value
    var_dump(5 === 5.0);
    echo "<br />";
    var_dump(5 != 6);
    echo "<br />";
    var_dump(5 <> 6); // equal to !=
    echo "<br />";
    var_dump(5 > 6);
    echo "<br />";
    var_dump(5 < 6);
    echo "<br />";
    var_dump(5 <= 6);
    echo "<br />";
    var_dump(5 >= 6);
    echo "<br />";
# comparing > = < if it's larger retutns 1 equal return 0 less than returns -1 so here it will be -1    
    var_dump(5 <=> 6);
    echo "<br />";

  # I am A big fan of strict comparison "===" let me show you example
  # Here i will search on 'H' in Hello world
  $num1 = 'Hello World';
  $num2 = strpos($num1 , 'H');

  # here it will print h not found althought H in 0 index 
  # that's because $num2 here will be 0 
  # and because of == => false is equal to 0 then it will be 0 == 0 so it will be true
  if($num2 == false){
    echo "H Not Found" . "<br />";
  } else  {
    echo "H Found In Index " . $num2 . "<br />";
  }

  # if we want to avoid this common mistake we will use strict comparison "==="
  # Here it will Print H Found In Index 0
    if($num2 === false){
    echo "H Not Found" . "<br />";
  } else  {
    echo "H Found In Index " . $num2 . "<br />";
  }

  # another way to make a condition in one line by using ?: ternary operator
  # it will return the exact same answer as the previous one H Found In Index 0
  echo $result = $num2 === false? "H Not Found" . "<br />" : "H Found In Index " . $num2 . "<br />";

  # ?? Null Coalescing Operator
  # Checks if the value is null then return the other value 
  # if it's not null return it 
  # so here a is null so the value of b will be Hello 
  # if a wasn't null if it was like world then the value of b will also b world
  $a = null;
  $b = $a ?? 'Hello';
  echo $b . "<br />";
  
# --------------------------------------------------------------------------------------------------------    

# Error Controll Operator(@)
  # this file isn't not existing so there will be an error here
  # so we just put @ and this error will be removed
  # i don't recommend using this but i just want to let you know the using of this operator
  $file = @file("bar.txt");

# --------------------------------------------------------------------------------------------------------    

# Increment/Decrement Operators (++ , --)
  $num3 = 5;

  # post Increment and decrement
  # here first it returns the value then increment or decrement
  # same logic for $num3--
  echo $num3++ . "<br />"; // 5
  echo $num3 . "<br />"; // 6

  # pre increment and decrement
  # here first we will increment or decrement and then we will return the value
  # same logic for ++$num4
  $num4 = 5;
  echo --$num4 . "<br />"; // 4
  echo $num4 . "<br />"; // 4

# --------------------------------------------------------------------------------------------------------    

  # Logical Operators(&& || ! and or xor)
  $num5 = true;
  $num6 = false;

  var_dump($num5 && $num6);
  echo "<br />";
  var_dump($num5 || $num6);
  echo "<br />";
  var_dump(!$num5 && $num6);
  echo "<br />";
  var_dump($num5 and $num6);
  echo "<br />";
  var_dump($num5 or $num6);
  echo "<br />";
  var_dump($num5 xor $num6);
  echo "<br />";

# --------------------------------------------------------------------------------------------------------    

  # Bitwise Operators(&  |  ^  ~  <<  >>) => for binary calculations

  $num7 = 6;
  $num8 = 3;

  # 1 1 0
  # &
  # 0 1 1
  #--------
  # 0 1 0
  var_dump($num7 & $num8); //int(2)
  echo "<br />";

  # 1 1 0
  # |
  # 0 1 1
  #--------
  # 1 1 1

  var_dump($num7 | $num8); // int(7)
  echo "<br />";

  # 1 1 0
  # ^
  # 0 1 1
  #--------
  # 1 0 1

  var_dump($num7 ^ $num8); //int(5)    ^ => XOR
  echo "<br />";


  # 1 1 0
  # ~
  # 0 0 1
  # &
  # 0 1 1
  #--------
  # 0 0 1
  
  var_dump(~$num7 & $num8); //int(1)    ~ => not
  echo "<br />";

# << we will shift the first number bits by the second number to the left
# make it larger
  # 1 1 0
  # <<
  # 0 1 1
  #--------
  # 1 1 0 0 0 0 -> 48

  var_dump($num7 << $num8); //int(48)
  echo "<br />";

# << we will remove from the right
# make it smaller
# so here the 3 numbers will be removed so the result will be 0
  # 1 1 0
  # >>
  # 0 1 1
  #--------
  # 0


  var_dump($num7 >> $num8); //int(0)
  echo "<br />";

  # --------------------------------------------------------------------------------------------------------    

  # Array Operators(+  ==  ===  != <> !==)
  $array1 = ['a' => 1 , 'b' => 2 , 'c' => 3];
  $array2 = ['a' => 1 , 'b' => '2' , 'c' => 3];
  $array3 = $array1 + $array2;
  
  # What is Actually done here is + here union the arrays in 1 if the keys is different
  # if the keys are the same like here it will take the first array element
  # if the second array had like 5 element instead of 3 like there were d and f
  # the result array will be the first array and the last 2 elements in the second array if they had the same key
  # so the output here will be the first array
  echo '<pre>';
  print_r($array3);
  echo '</pre>';

  # here it will check the number of elements in the array and the key and value
  # but not check the data type of the value
  var_dump($array1 == $array2); // bool(true)
  echo "<br />";  

  # here it will check the number of elements in the array and the key , value and the data type
  var_dump($array1 === $array2); // bool(false)
  echo "<br />";

