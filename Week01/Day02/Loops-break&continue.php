<?php

// Loops

# while
// syntax
$i = 0;
while ($i <= 15){
  echo $i++ . " ";
} 
echo "<br />";

// alternative syntax
while ($i <= 15):
  echo $i++ . " ";
endwhile;
echo "<br />";

// break level 2 if nested is found 
$c = 0;
while(true){
  while($c > 10){
    break 2;
  }
  echo $c++ . " ";
}
echo "<br />";

// continue
// here i want to print odd numbers
$s = 0;
while($s <= 15){
  if($s % 2 == 0){
    $s++;
    continue;
  }
  echo $s++ . " ";
}

echo "<br />" . "------------------------------------------------------------------------------------------------" . "<br />";
//---------------------------------------------------------------------------------------------------------------

# do-while: the difference here is in do-while loop the loop will execute at least once
// here the condition is false but anyway $a will be printed and then increased by 1
$a = 0;
do{
  echo $a++ . " ";
}while($a < 0);

echo "<br />" . "------------------------------------------------------------------------------------------------" . "<br />";
//---------------------------------------------------------------------------------------------------------------


# for Loop
# there is here a performance issues with calling a built in function inside the for loop
# instead of that we can name a variable before the for loop or even put that variable inside the for loop in initialization section  ($i =0)
$array = ["a" , "b" , "c" , "d"];
$length = count($array);
for($b = 0; $b < $length ; $b++){
  echo $array[$b] . "<br />";
}

// alternative syntax
// for($b = 0; $b < $length ; $b++):
//   echo $array[$b] . "<br />";
// endfor;


echo "<br />" . "------------------------------------------------------------------------------------------------" . "<br />";
//---------------------------------------------------------------------------------------------------------------

# foreach for arrays , objects

$Programming_Languages = ['PHP' ,'HTML' ,'CSS' ,'JAVASCRIPT'];

foreach($Programming_Languages as $language){

  $language = 'cpp';
  // echo $language . "<br />";
}
//here the original array is not changed
print_r($Programming_Languages);
echo "<br />";

// we set the variable language by value at the previous example what about reference

$animals = ['cat' , 'dog' , 'donkey' , 'monkey'];
foreach($animals as $key => &$animal){
$animal = 'horse';
  // echo $animal . "<br />";
}

// but here the whole array changed to horse 
print_r($animals);
echo "<br />";


//---------------------------------------
# a quick tip the variable $language will still remain after the foreach loop 
# same to $animal variable
echo $language . "<br />"; //cpp

# specially here because if we changed the $animal after the foreach loop the last array element will change also 
echo $animal . "<br />"; //horse

// so what we do : unset() any variable you used in the foreach loop simple 

//---------------------------------------------------------------------------------------------------------------------------

$user = [
  'Name' => 'Abdallah',
  'Email' => 'abdallah@gmail.com',
  'skills' => ['php' , 'laravel' , 'html' , 'css']
];

foreach($user as $key => $value):
// if it's that way the array of skills will not be printed
//echo $key . " => " . $value . "<br />";

# there are many ways one in using json_encode() function
# but this shows the exact array you typed with the square prackets
//echo $key . " => " . json_encode($value) . "<br />";

# function called implode but it work if there is only array so we need to check first if there is array
// if(is_array($value)){
//   $value = implode("-" , $value);
// } 
//   echo $key . " => " . $value . "<br />";

# another way is just you can iterate the skills array 
echo $key . ": ";
if(is_array($value)){
  foreach($value as $skill){
    echo  $skill . " - ";
  }
}  else {
  echo $value . "<br />";
}


endforeach;











