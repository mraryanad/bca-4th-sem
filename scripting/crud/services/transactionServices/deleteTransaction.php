<?php
if(isset($_GET['transactionId'])){
    $transactionId = $_GET['transactionId'];

    $delete_transaction_query = "DELETE FROM `transaction` WHERE `id` = $transactionId";
    $delete_transaction_result = $conn->query($delete_transaction_query);

    if($delete_transaction_result == true){
        header('Location: /crud/transaction.php');
    } else {
        echo "Error deleting transaction entry: ".$stmt->error;
    }
    
    $stmt->close();
} else {
    echo "NO ID PROVIDED!!!";
}

$conn->close();