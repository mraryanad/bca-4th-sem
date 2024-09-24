<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'debitCreditTracker';

$con =  new mysqli($servername,$username,$password,$database);
if($con->connect_error){
    die('connection failed' . $con->connect_error);
}

echo 'connect successfully';


?>