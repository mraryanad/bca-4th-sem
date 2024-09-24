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

$sql_query = "SELECT * FROM `ledger`";
$result = $con->query($sql_query);

if (!$result) {
    die('Query failed: ' . $con->error);
}

$ledger_data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ledger_data[] = $row;
    }
}

$con->close();
