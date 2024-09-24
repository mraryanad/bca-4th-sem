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
    $entity = $_POST['entity'];

    $sql = "INSERT INTO `ledger`(entity) VALUES('$entity')";
    $result = $con->query($sql);

    if($result == true){
     header('Location: ../../pages/index.php'); 
    }

    $con->close();
}
?>