$paid_amount = $data->data->amount; // in kobo from Paystack
if ($data->data->status == 'success' && $paid_amount == AMOUNT) {
  // Save data – only if amount matches exactly
  file_put_contents('applications.csv', implode(',', $_SESSION['form_data']) . ",$ref," . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
  echo "<h2>Payment Successful! You paid exactly ₦5,000. Reference: $ref</h2>";
} else {
  echo "Payment failed – incorrect amount. You paid " . ($paid_amount/100) . " NGN instead of ₦5,000. Contact support.";
}
