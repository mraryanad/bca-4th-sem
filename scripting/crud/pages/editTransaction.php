<?php
include "./services/transactionServices/readSingleTransaction.php";
ob_start();
?>

<form
    action="./services/transactionServices/updateTransaction.php<?php echo isset($transactionId) ? '?transactionId='.$transactionId:'';?>"
    method="post">
    <label style="display: block;" for="">DR/CR</label>
    <input style="display: block; margin-bottom: 10px;" type="text" name="isDebitCredit"
        value="<?php echo ($transaction['isDebitCredit']) ?>">

    <label style="display: block;" for="">Amount</label>
    <input style="display: block; margin-bottom: 10px;" type="number" name="amount"
        value="<?php echo ($transaction['amount']) ?>">

    <label style="display: block;" for="">Ledger ID</label>
    <input disabled style="display: block; margin-bottom: 10px;" type="number" name="ledgerId"
        value="<?php echo ($transaction['ledgerId']) ?>">
    <button class="btn btn-success" type="submit">Submit</button>
</form>

<?php
 $content = ob_get_clean();
include '../layout/layout.php';
?>