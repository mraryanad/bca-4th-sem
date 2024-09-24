<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isDebitCredit = $_POST['isDebitCredit'];
    $amount = $_POST['amount'];
    $ledgerId = $_POST['ledgerId'];
    

    $sql = "INSERT INTO transaction (isDebitCredit, amount, ledgerId) VALUES('$isDebitCredit', '$amount', '$ledgerId')";
    $result = $con->query($sql);

    if($result == true){
     header('Location: /crud/transaction.php');
    }

    $con->close();
}