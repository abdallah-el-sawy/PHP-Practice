<?php

$num = 3.5;

echo $num . "<br>";

//here 0.1 + 0.7 = 0.799999999999999999999999999991
echo floor((0.1 + 0.7) * 10) . "<br>"; // 7
echo ceil((0.1 + 0.7) * 10) . "<br>"; // 8

$x = 0.23;
$y = 1 - 0.77;

if($x == $y){
  echo 'yes' . "<br>";
}   else  {
  echo 'no' . "<br>";
}

// the answer is no for more visit
// https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqa2pFQlFyTlpvUzJsYl8zUUJ4Tmtla0hfVFc2QXxBQ3Jtc0tuT1lfTU11czJlTzdJS0huakV4OTVZQ2QwdTkxSmc2SEpBWjNwVlkwdzZ1dzlVN2JfeDFHdlZYVzFCR2NRakFjTzQ4dU9mZFpXa1dhYWNSR1RFbHFqYVlvYXNyUVY3Z2tUWUdRVXdrc1lZakdhMjZmZw&q=https%3A%2F%2Ffloating-point-gui.de%2F&v=d3c_OOD4Jzs

// NAN -> not a number

echo log(-1) . "<br>"; //NAN

// INF -> infinity

$number =  PHP_FLOAT_MAX * 2; // INF  

// if we want to check if the number is NAN or INF
// by using is_infinite() , is_finite() , is_nan

var_dump(is_infinite($number)); //bool(true)
echo "<br>";
var_dump(is_finite($num)); //bool(true)
echo "<br>";
var_dump(is_nan(log(-1))); //bool(true)
echo "<br>";
var_dump(is_nan($num)); // bool(false)
echo "<br>";
var_dump(is_nan($number)); // bool(false)
echo "<br>";