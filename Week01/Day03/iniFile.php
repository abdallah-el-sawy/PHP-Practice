<?php

// display errors -> ini file , error reporting

# if 0 the error will disapear if 1 the error will appear
//ini_set('display_errors' , 0);

# x is not defined so here is error but the value of display errors is 0 so the error will disappear
//echo $x;

# but i don't wanr to remove all errors so here we will talk about error_reporting
// default value is E_ALL 
# so here i made it show only the warning errors
# E_ERROR-> for fatal error
error_reporting(E_ERROR | E_WARNING);
echo $x;

# now this is a fatal error it won't appear
//newname();




