<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entity = $_POST['entity'];

    $sql = "INSERT INTO ledger (entity) VALUES('$entity')";
    $result = $conn->query($sql);

    if($result == true){
     header('Location: ../pages/index.php'); 
    }

    $conn->close();
}