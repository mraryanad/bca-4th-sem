<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'debitCreditTracker';

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

// Enable error reporting for debugging
ini_set('display_errors', 1);   
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the connection is set
if (!isset($con)) {
    die('Connection variable not set');
}

// Check if transactionId is set via GET and other form fields via POST
if (isset($_GET['transactionId']) && isset($_POST['isDebitCredit']) && isset($_POST['amount']) && isset($_POST['ledgerId'])) {
    $transactionId = intval($_GET['transactionId']);
    $isDebitCredit = $_POST['isDebitCredit'];
    $amount = intval($_POST['amount']);
    $ledgerId = intval($_POST['ledgerId']);

    // Update transaction query
    $update_transaction_query = "UPDATE `transaction` SET `isDebitCredit` = '$isDebitCredit', `amount` = $amount, `ledgerId` = $ledgerId WHERE `transactionId` = $transactionId";
    
    $stmt = $con->query($update_transaction_query);
    
    if ($stmt == true) {
        // Redirect to transaction page on success
        header('Location: ../../pages/transaction.php');
        exit();
    } else {
        // Display error if the query fails
        die('Query failed: ' . $con->error);
    }
} else {
    // Handle cases where POST data is missing
    die('Required fields missing.');
}

$con->close();
    