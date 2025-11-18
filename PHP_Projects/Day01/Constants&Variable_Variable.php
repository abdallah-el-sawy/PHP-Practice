<?php

// Constants

define("STATUS_PAID" , "paid");

echo STATUS_PAID . "<br>"; // paid

echo defined("STATUS_PAID") . "<br>"; // 1 -> Means that this constant name is defined
echo defined("STATUS_ACTIVE") . "<br>";// Nothing is printed -> this means that this constant name is not defined

// another way to define constants by using const keyword

const STATUS_ACTIVE = "Active";

echo STATUS_ACTIVE . "<br>"; //Active

// we will talk later about conditions but now 
// const keyword is not working with conditions , loops
// so if we wanted to define a constant in a condition we will use define function

if(true){
  define("STATUS_ATTENDANCE" , "Absent");
}

// there are also pre-defined constants in php "Magic Constants"

echo PHP_VERSION . "<br>";
echo __LINE__ . "<br>"; // it will print the line number here it's 29
echo __FILE__ . "<br>"; // it will print the file full path

echo "*************************************************************************<br>";
//----------------------------------------------------------------------------------------

# Variable Variable

$foo = 'bar';

$$foo = 'baz'; // equal to $bar = 'baz';

echo $foo . $bar . "<br>"; // barbaz
echo $foo . $$foo . "<br>";
echo $foo . ${$foo} . "<br>";



