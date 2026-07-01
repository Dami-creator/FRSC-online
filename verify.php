<?php
include 'config.php';
session_start();
$ref = $_GET['reference'];
$ch = curl_init("https://api.paystack.co/transaction/verify/$ref");
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . PAYSTACK_SECRET]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$data = json_decode($result);

if ($data->data->status == 'success') {
  // Save to database or CSV
  file_put_contents('applications.csv', implode(',', $_SESSION['form_data']) . ",$ref," . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
  echo "<h2>Payment Successful! Reference: $ref</h2><p>Your application is submitted.</p>";
} else {
  echo "Payment failed.";
}
?>
