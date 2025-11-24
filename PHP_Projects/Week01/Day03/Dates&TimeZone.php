<?php 

/* Date & Time  (Basic Use*/

$currentTime = time(); // this is the time from 1970 in seconds

echo ($currentTime /(60 * 60 * 24 * 365.25))  . "<br>"; # time now in years
echo ($currentTime / (60 * 60 * 24 * 365.25)) + 1  . "<br>"; # time + 1 year
echo ($currentTime / (60 * 60 * 24 * 365.25)) - 1 . "<br>";  # time - 1 year

echo date('m/d/Y g:i a' , $currentTime) ."<br />";

date_default_timezone_set('UTC');

echo date('m/d/Y g:i a' , $currentTime) ."<br />";

#----------------------------------------------------------------------------

echo date('m/d/Y g:i a', mktime(0 , 0 ,0 ,4 , 10 ,null)) . "<br />";


echo date('m/d/Y g:i a',strtotime('2025-11-24 04:22 AM')) . "<br />";

$date = date('m/d/Y g:i a',strtotime('tomorrow')) . "<br />";


echo "<pre>";
print_r(date_parse($date));
echo "</pre>";

echo "<pre>";
print_r(date_parse_from_format('m/d/Y g:i a',$date));
echo "</pre>";




