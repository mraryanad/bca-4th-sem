<?php
if(isset($_GET['transactionId'])) {
    $transactionId = intval($_GET['transactionId']);

    $fetch_transaction_result = $con->query($fetch_transaction_query);

    if($fetch_transaction_result->num_rows > 0) {
        $transaction = $fetch_transaction_result->fetch_assoc();
    } else {
        $transaction = null;
    }
} else {
    echo "No ID Provided";
}

$con->close();