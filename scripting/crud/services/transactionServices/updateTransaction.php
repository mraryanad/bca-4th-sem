<?php
if(isset($_GET['transactionId'])) {
    $transactionId = intval($_GET['transactionId']);
    $isDebitCredit = $_POST['isDebitCredit'];
    $amount = $_POST['amount'];
    $ledgerId = $_POST['ledgerId'];

    $update_transaction_query = "UPDATE `transaction` SET  `isDebitCredit` = '$isDebitCredit', `amount` = '$amount', `ledgerId` = '$ledgerId' WHERE `id` = '$transactionId'";
    $stmt = $conn->query($update_transaction_query);

    if($stmt == true){
        header('Location: /crud/transaction.php');
        exit();
    }
}

$conn->close();