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
    $entity = $_POST['entity'];

    $update_ledger_query = "UPDATE `ledger` SET `entity` = '$entity' WHERE `ledgerId` = $ledgerId";
    $stmt = $con->query($update_ledger_query);

    if($stmt == true){
        header('Location: ../../pages/index.php');
        exit();
    }
}

$con->close();