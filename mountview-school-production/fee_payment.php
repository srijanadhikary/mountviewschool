<?php include 'includes/header.php'; ?>
<div class="glass-card">
<h2>Online Fee Payment</h2>
<form action="esewa_request.php" method="POST">
<input type="text" name="student_name" placeholder="Student Name" required>
<input type="number" name="amount" placeholder="Amount" required>
<button type="submit">Pay with eSewa</button>
</form>
</div>
<?php include 'includes/footer.php'; ?>
