<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>FRSC Registration</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
<h1>Federal Road Safety Corps – Online Application</h1>
<form action="pay.php" method="POST">
<input name="fullname" placeholder="Full Name" required>
<input name="email" type="email" placeholder="Email" required>
<input name="phone" placeholder="Phone" required>
<input name="nin" placeholder="NIN" required>
<input name="plate" placeholder="Plate Number" required>
<button type="submit">Pay ₦5,000 & Submit</button>
</form>
</div>
</body>
</html>
