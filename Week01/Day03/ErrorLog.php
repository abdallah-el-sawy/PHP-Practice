<?php


// now i want to show this error in another file not in the browser

function error_handler($level , $message , $file , $line ){
  $errors = 'Level: ' . $level . "\n";
  $errors .= 'Message: ' . $message . "\n";
  $errors .= 'File: ' . $file . "\n";
  $errors .= 'Line: ' . $line . "\n";
  $errors .= "================================================\n";

  error_log($errors , 3 , 'log_error_files');
}

set_error_handler('error_handler');

echo $x;
