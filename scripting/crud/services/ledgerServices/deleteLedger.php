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
        
if(isset($_GET['ledgerId'])){
    $ledgerId = $_GET['ledgerId'];

    $delete_ledger_query = "DELETE FROM `ledger` WHERE `ledgerId` = $ledgerId";
    $delete_ledger_result = $con->query($delete_ledger_query);

    if($delete_ledger_result == true){
        header('Location: ../../pages/index.php');
    } else {
        echo "Error deleting ledger entry: ".$stmt->error;
    }
    
    $stmt->close();
} else {
    echo "NO ID PROVIDED!!!";
}
    
$con->close();