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

if(isset($_GET['ledgerId'])) {
    $ledgerId = intval($_GET['ledgerId']);

    $fetch_ledger_query = "SELECT * FROM `ledger` WHERE `ledgerId` = $ledgerId";
    $fetch_ledger_result = $con->query($fetch_ledger_query);

    if($fetch_ledger_result->num_rows > 0) {
        $ledger = $fetch_ledger_result->fetch_assoc();
    } else {
        $ledger = null;
    }
} else {
    echo "No ID Provided";
}

$con->close();