<?php
$appName = 'E-Clearance';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($appName) ?> | Create Account</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-page register-page">
  <div class="register-shell">
    <aside class="register-side">
      <a class="back-link" href="index.php">← Back to login</a>
      <div class="register-brand-card">
        <div class="brand-badge">CSA</div>
        <span class="section-kicker light-kicker">Student Portal</span>
        <h1>Create your E-Clearance account.</h1>
        <p>Register once, submit your clearance request online, and follow your progress without repeatedly visiting offices for updates.</p>
        <div class="mini-stat-row">
          <div><strong>01</strong><span>Create account</span></div>
          <div><strong>02</strong><span>Submit clearance</span></div>
          <div><strong>03</strong><span>Track progress</span></div>
        </div>
      </div>
    </aside>

    <main class="register-main">
      <div class="register-form-card">
        <div class="form-heading compact">
          <span class="section-kicker">Student registration</span>
          <h2>Create your account</h2>
          <p>Use your official student details. Fields marked required must be completed.</p>
        </div>

        <form class="auth-form demo-form" data-redirect="dashboard.php">
          <div class="form-grid two-col">
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input id="first_name" type="text" placeholder="Juan" required>
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input id="last_name" type="text" placeholder="Dela Cruz" required>
            </div>
          </div>

          <div class="form-grid two-col">
            <div class="form-group">
              <label for="student_id">Student ID</label>
              <input id="student_id" type="text" placeholder="2026-00000" required>
            </div>
            <div class="form-group">
              <label for="email">School Email</label>
              <input id="email" type="email" placeholder="student@school.edu.ph" required>
            </div>
          </div>

          <div class="form-grid two-col">
            <div class="form-group">
              <label for="program">Program</label>
              <select id="program" required>
                <option value="">Select program</option>
                <option>BS Information Technology</option>
                <option>BS Computer Science</option>
                <option>BS Business Administration</option>
                <option>BS Accountancy</option>
                <option>Other Program</option>
              </select>
            </div>
            <div class="form-group">
              <label for="year_level">Year Level</label>
              <select id="year_level" required>
                <option value="">Select year level</option>
                <option>1st Year</option>
                <option>2nd Year</option>
                <option>3rd Year</option>
                <option>4th Year</option>
                <option>5th Year</option>
              </select>
            </div>
          </div>

          <div class="form-grid two-col">
            <div class="form-group">
              <label for="new_password">Password</label>
              <div class="input-wrap plain-wrap">
                <input id="new_password" type="password" placeholder="At least 8 characters" minlength="8" required>
                <button type="button" class="password-toggle">Show</button>
              </div>
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <div class="input-wrap plain-wrap">
                <input id="confirm_password" type="password" placeholder="Repeat password" minlength="8" required>
                <button type="button" class="password-toggle">Show</button>
              </div>
            </div>
          </div>

          <label class="check-row terms-row">
            <input type="checkbox" required>
            <span>I confirm that the information provided is accurate and I agree to the school's acceptable use and privacy policies.</span>
          </label>

          <button type="submit" class="btn btn-primary btn-block">Create Account <span class="btn-arrow">→</span></button>
          <p class="center-copy">Already registered? <a class="text-link" href="index.php">Sign in here</a></p>
        </form>
      </div>
    </main>
  </div>

  <div class="toast" id="toast" role="status" aria-live="polite"></div>
  <script src="assets/js/app.js"></script>
</body>
</html>
