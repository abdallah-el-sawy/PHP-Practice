<?php

declare(strict_types = 1);

// Your Code

function getTransactionFiles(string $dirpath):array
{
  $files = [];

  foreach(scandir($dirpath) as $file)
  {
    if(is_dir($file)){
      continue;
    }
    
    $files [] = $dirpath . $file;
  }
  
  return $files;
}


function getTransactions(string $filename): array
{
  if(! file_exists($filename))
  {
    trigger_error('File ' . $filename . ' ' . 'not found!' , E_USER_ERROR);
  }

  $file = fopen($filename , 'r');

  fgetcsv($file); // read 1st line for ignoring the header in csv file

  $transactions = [];
  while(($transaction = fgetcsv($file)) !== false)
  {
    $transactions [] = parseTransactions($transaction);
  }
  return $transactions;
}


function parseTransactions(array $transactionRow): array
{
  [$date , $checkNumber , $description , $amount] = $transactionRow;

  $amount = (float)str_replace(['$' , ','] , '' , $amount);


  return [
    'date'        => $date,
    'checkNumber' => $checkNumber,
    'description' => $description,
    'amount'      => $amount
  ];

}

function calculateTotals(array $transactions): array
{
  $totals = ['netTotal' => 0 , 'totalIncome' => 0 , 'totalExpense' => 0];


    foreach($transactions as $transaction)
      {
        $totals['netTotal'] += $transaction['amount'];

        if($transaction['amount'] >= 0)
        {
          $totals['totalIncome'] += $transaction['amount'];
        }
        else
        {
          $totals['totalExpense'] += $transaction['amount'];
        }
      }
        return $totals;
  }

















