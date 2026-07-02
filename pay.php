$fields = json_encode([
  'email' => $_POST['email'],
  'amount' => AMOUNT, // 500,000 kobo – fixed
  'callback_url' => 'https://frsc-live.onrender.com/verify.php'
]);
