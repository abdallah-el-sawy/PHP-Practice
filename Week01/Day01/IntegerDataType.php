<?php

/* INTEGERS */

$decimal = 10;
$hexa = 0x2A; // 42
$octal = 055; //45
$binary = 0b110; //6

echo $decimal . "<br>"; // 10
echo $hexa . "<br>"; // 42
echo $octal . "<br>"; // 45
echo $binary . "<br>"; // 6

// there is a way to check if the value is integer by using is_int() function

var_dump(is_int($decimal));// bool(true) because it's integer