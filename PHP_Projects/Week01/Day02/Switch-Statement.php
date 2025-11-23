<?php

$payment_statuses = ['paid','declined','rejected','pending'];

foreach($payment_statuses as $payment_status){
  switch($payment_status){
      case 'paid':
        echo "paid" . "<br/>";
        // this break is only breaking the switch if want to break the foreach loop as well we can use break 2 ( level 2 break )
        break;

  // if we have 2 cases print the same output we can do this instead of duplicating
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
}

// switch statment is better in performance than elseif