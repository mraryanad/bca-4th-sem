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

if(isset($_GET['transactionId'])){
    $transactionId = $_GET['transactionId'];

    $delete_transaction_query = "DELETE FROM `transaction` WHERE `transactionId` = $transactionId";
    $delete_transaction_result = $con->query($delete_transaction_query);

    if($delete_transaction_result == true){
        header('Location: ../../pages/transaction.php');
    } else {
        echo "Error deleting transaction entry: ".$stmt->error;
    }
    
    $stmt->close();
} else {
    echo "NO ID PROVIDED!!!";
}

$con->close();