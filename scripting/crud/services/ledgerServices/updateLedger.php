<?php
if(isset($_GET['ledgerId'])) {
    $ledgerId = intval($_GET['ledgerId']);
    $entity = $_POST['entity'];

    $update_ledger_query = "UPDATE `ledger` SET `entity` = '$entity' WHERE `id` = $ledgerId";
    $stmt = $conn->query($update_ledger_query);

    if($stmt == true){
        header('Location: ../pages/index.php');
        exit();
    }
}

$conn->close();