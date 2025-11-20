<?php

$isComplete = [];

// integer 0 , -0 = false
// floats 0.0 , -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

// except these the rest are true

if($isComplete) {
    # do something
    echo "Success" . "<br>";
} else {
    echo "Fail" . "<br>";
    # do something else
}

// there is a function check if the value is boolean or not it's is_bool()

$ishere = true;
$isset = [];

echo var_dump(is_bool($ishere)) . "<br>"; //bool(true)
echo var_dump(is_bool($isset)) . "<br>"; //bool(false)

