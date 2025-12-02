<?php

// Working with file system

$dir = scandir(__DIR__);
echo "<pre>";
print_r($dir);
echo "</pre>";

mkdir('sawy'); // //create a new directory named 'sawy'
rmdir('sawy'); // remove a direcory -> the dir must be empty to be removed

echo "======================================================================<br />";
//--------------------------------------------------------------------------


if(file_exists('text.txt')){
  echo filesize('text.txt'). "<br />";
  # there is also a function called file_get_contents()
  #file_get_contents(filename , offset-> start from which chars , length -> how many chars from the beginng) which gets a file content
  
  # also here file_put_contents() -> if the file is not exists it will create it and put the content inside the file 
  # and if it's exsist it will override the content
  # you can append content by using the FILE_APPEND flag to avoid overriding
  file_put_contents('text.txt' , 'Hello, Abdallah Elsawy');
  // here is printing the previous cache value so we need to clear cache first
  #echo filesize('text.txt'). "<br />";

  clearstatcache();
  echo filesize('text.txt'). "<br />";


  
} else  {
  echo 'file not found' . "<br />";
}

echo "======================================================================<br />";
//--------------------------------------------------------------------------

// file modes
if(! file_exists('filemods.txt')){
  echo 'File not exists . "<br />';
  return;
}

$file = fopen('filemods.txt' , 'r');


$counter = 1;
while(($line = fgets($file)) !== false){
  echo 'Line ' . $counter . ': ' . $line . "<br />";
  $counter++;
}

// after we done from that file we close it
fclose($file);


//*************/
//  Important /
//************/
// you can delete a file using unlink('filename')
// you can copy a file using copy('source' , 'destination')
// if you want to move the file (it also work with dirs) you can use rename() function


