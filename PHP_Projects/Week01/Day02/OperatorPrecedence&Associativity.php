<?php

# Operator Precedence & Associativity

# Precedence

# If The precedence wasn't here the sum will be 8 * 5 = 40
# but the precedence makes it 3*5 first so it's 15 then sum it wilth 5 
# so the result will be 20 not 40
$x = 5 + 3 * 5;
echo $x . "<br />"; // 20

# if you want to make 5+3 runs first you can put them in parentheses "()"
# so the sum here will be 40
$y = (5 + 3) * 5;
echo $y . "<br />"; // 40

//----------------------------------------

$a = true;
$b = false;
$c = $a && $b;
$d = $a and $b;

# Here the result will be false because "&&" operator has a higher precedence than "=" 
# so the $a && $b expression will be calculated first then the final result gets assigned to $c
var_dump($c);
echo "<br />";
# but here the result will be true because "=" operator has a higher precedence than "and" operator 
# so the "$d = $a" expression will be calculated first then gets and with $b 
# and because here $d = $a which is $d = true then $d will be true
var_dump($d);
echo "<br />";

# if you want to avoid this mistake you can use parentheses "()"
#for any operation to add more clearity and readability code 



#-----------------------------------------------------------------------------

# Associativity
$num1 = 5;
$num2 = 2;
$num3 = 10;

# here because the / and * have the same precedence then we will need to look at the associativity
# the associativity here saying from left 
# so we will divide $num1 by $num2 and the result from it we will multiply it by $num3
# and the final result gets assigned to $result
$result = $num1 / $num2 * $num3;

echo $result . "<br />";




#-----------------------------------------------------------------------------