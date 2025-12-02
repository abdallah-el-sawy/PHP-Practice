<?php

# data types & type casting

  # Scalar Types
    # bool -> true/flase
    $completed = true;
    #int -> 1,2,5
    $score = 100;
    #float or double -> 3.5 , 0.8
    $price = 99.99;
    #string -> "Hello"
    $greetings = "Hello Abdallah";

    //************************************************************************** */

    echo $completed . "<br>"; // true will be printed as 1 and false will print nothing
    echo $score . "<br>";
    echo $price . "<br>";
    echo $greetings . "<br>";

    echo "<br>";
    // there is a way to check the type of the variable 
    // by using gettype() function

    echo gettype($completed) . "<br>"; // boolean
    echo gettype($score) . "<br>"; // int
    echo gettype($price) . "<br>"; // double
    echo gettype($greetings) . "<br>"; // string

    echo "<br>";

    // there is another way to check the type of the variable 
    // by using var_dump() function -> it will print everything about the variable

    echo var_dump($completed) . "<br>"; //bool(true)
    echo var_dump($score) . "<br>"; // int(100)
    echo var_dump($price) . "<br>"; // float(99.99)
    echo var_dump($greetings) . "<br>"; // string(14) "Hello Abdallah"

    echo "<br>";

     //************************************************************************** */

    # Compound Types
      #array
      $companies = [1 ,2.2 ,-9.3 ,true ,"Abdallah"];
      print_r($companies);

      # object
      # callable
      # iterable

    # Special Types
      # resource
      # null  
    //**************************************************************************

    echo "<br>";

    // Type juggling or Type Coerion
    function sum(int $x ,int $y){
      var_dump($x , $y);
      echo "<br>";
      return $x + $y;
    }

    echo sum(3 , "5");
        echo "<br>";

        //**************************************************************************
        
        // if we wanted to avoid this
        // we can activate the strict php mode by using "declare(string_types=1);"

        //**************************************************************************

# Type Casting
$x = (int)5.5;

var_dump($x); // int(5)
