<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

/* YOUR CODE (Instructions in README.md) */
require APP_PATH . 'App.php';
require APP_PATH . 'helpers.php';

# Get File Path
$files= getTransactionFiles(FILES_PATH);

echo '<pre>';
print_r($files);
echo '</pre>';

echo '==========================================================<br />';


# Get Transaction Information
$transactions = [];

foreach($files as $file)
{
  $transactions = array_merge($transactions , getTransactions($file));
}

echo '<pre>';
print_r($transactions);
echo '</pre>';

$totals = calculateTotals($transactions);

echo '==========================================================<br />';

# Display Data in HTML Table
require VIEWS_PATH . 'transactions.php';






