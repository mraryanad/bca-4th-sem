<?php
if(isset($_GET['ledgerId'])) {
    $ledgerId = intval($_GET['ledgerId']);

    $fetch_ledger_query = "SELECT * FROM `ledger` WHERE `id` = $ledgerId";
    $fetch_ledger_result = $conn->query($fetch_ledger_query);

    if($fetch_ledger_result->num_rows > 0) {
        $ledger = $fetch_ledger_result->fetch_assoc();
    } else {
        $ledger = null;
    }
} else {
    echo "No ID Provided";
}

$conn->close();