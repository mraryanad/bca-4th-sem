<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'debitCreditTracker';

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);       
error_reporting(E_ALL);

if (!isset($con)) {
    die('Connection variable not set');
}

if(isset($_GET['transactionId'])) {
    $transactionId = intval($_GET['transactionId']);

    $fetch_transaction_query = "SELECT * FROM `transaction` WHERE `transactionId` = '$transactionId'";
    $fetch_transaction_result = $con->query($fetch_transaction_query);

    if($fetch_transaction_result->num_rows > 0) {
        $transaction = $fetch_transaction_result->fetch_assoc();
    } else {
        $transaction = null;
    }
} else {
    echo "No ID Provided";
}

$con->close();