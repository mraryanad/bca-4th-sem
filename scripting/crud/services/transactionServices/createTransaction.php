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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isDebitCredit = $_POST['isDebitCredit'];
    $amount = $_POST['amount'];
    $ledgerId = $_POST['ledgerId'];
    

    $sql = "INSERT INTO transaction (isDebitCredit, amount, ledgerId) VALUES('$isDebitCredit', '$amount', '$ledgerId')";
    $result = $con->query($sql);

    if($result == true){
     header('Location: ../../pages/transaction.php');
    }

    $con->close();
}