<?php

$payment_statuses = 'hello';

switch($payment_statuses){
      case 'paid':
        echo "paid" . "<br/>";
        break;


      case 'declined':
      case 'rejected':
        echo "rejected" . "<br/>";
        break;

      case 'pending':
        echo "pending" . "<br/>";
        break;

      default:
        echo "Unknown Payment Status" . "<br/>";
  }


//-----------------



$payment_statuse = match($payment_statuses){
  'paid' => 'paid',
  'declined', 'rejected' => 'declined',
  'pending' => 'pending',
  default => 'Unknown Payment Status',
};

echo $payment_statuse . "<br />";