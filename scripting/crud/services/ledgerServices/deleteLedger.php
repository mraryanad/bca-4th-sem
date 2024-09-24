<?php
if(isset($_GET['ledgerId'])){
    $ledgerId = $_GET['ledgerId'];

    $delete_ledger_query = "DELETE FROM `ledger` WHERE `id` = $ledgerId";
    $delete_ledger_result = $conn->query($delete_ledger_query);

    if($delete_ledger_result == true){
        header('Location: ../pages/index.php');
    } else {
        echo "Error deleting ledger entry: ".$stmt->error;
    }
    
    $stmt->close();
} else {
    echo "NO ID PROVIDED!!!";
}
    
$conn->close();