<?php
require_once 'includes/db.php';
$transaction_uuid = uniqid("MVES_");
$stmt = $pdo->prepare("INSERT INTO payments (student_name, amount, transaction_uuid) VALUES (?,?,?)");
$stmt->execute([$_POST['student_name'], $_POST['amount'], $transaction_uuid]);
?>
<form id="esewaForm" action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
<input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">
<input type="hidden" name="tax_amount" value="0">
<input type="hidden" name="total_amount" value="<?php echo $_POST['amount']; ?>">
<input type="hidden" name="transaction_uuid" value="<?php echo $transaction_uuid; ?>">
<input type="hidden" name="product_code" value="EPAYTEST">
<input type="hidden" name="success_url" value="https://mountviewschool.edu.np/payment_success.php">
<input type="hidden" name="failure_url" value="https://mountviewschool.edu.np/payment_failed.php">
</form>
<script>document.getElementById("esewaForm").submit();</script>
