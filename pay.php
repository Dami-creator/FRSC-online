<?php
include 'config.php';
session_start();
$_SESSION['form_data'] = $_POST;

$url = "https://api.paystack.co/transaction/initialize";
$fields = json_encode([
  'email' => $_POST['email'],
  'amount' => AMOUNT,
  'callback_url' => 'https://your-render-app.onrender.com/verify.php'
]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization: Bearer ' . PAYSTACK_SECRET,
  'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
$result = curl_exec($ch);
curl_close($ch);

$data = json_decode($result);
if ($data->status) {
  header('Location: ' . $data->data->authorization_url);
} else {
  echo "Error: " . $data->message;
}
?>
