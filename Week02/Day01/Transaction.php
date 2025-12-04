<?php

declare(strict_types=1);

class Transaction
{
  // Properties
    private float $amount;
    private string $description;


    //constructor
    public function __construct(float $amount, string $description)
    {
        // you can call the properties of the class within the class by using this keyword
        $this -> amount = $amount;
        $this -> description = $description;
    }

    // Methods
    public function getAmount(): float
    {
      return $this->amount;
    }
    public function addTax(float $rate): Transaction
    {
        $this -> amount +=( ( $this -> amount * $rate) / 100 );
        return $this;
    }

    public function addDiscount(float $rate): Transaction
    {
      $this -> amount -= ( ($this -> amount * $rate) / 100 );
      return $this;
    }

    public function __destruct()
    {
      echo 'Destruct' . $this -> description . '<br />';
    }
}



// access modifiers -> public , private , protected -> if we didn't type an access modifier php automatically make it public