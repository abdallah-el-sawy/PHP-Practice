<?php


declare(strict_types=1);

// Classes & Objects
require_once 'Transaction.php';

// the arguments inside transaction class parenthesis for the constructor
//Method chaining
$transaction1 = (new Transaction(100, 'Transaction 1'))
  ->addTax(10)
  ->addDiscount(10);

var_dump($transaction1->getAmount()); // 99
echo '<br />';

//------------------------------

//stdClass & object casting

$str = '{"a":1, "b":2, "c":3}';
$arr = json_decode($str);
var_dump($arr); // object(std class)
echo '<br />';

var_dump($arr->a); //1
echo '<br />';
//----------------

$arr1 = [1, 2, 3];
$obj = (object)$arr1;

var_dump($obj -> {1});
echo '<br />';

