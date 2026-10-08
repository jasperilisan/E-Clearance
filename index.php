<?php
$schoolName = 'Colegio San Agustin – Biñan';
$appName = 'E-Clearance';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($appName) ?> | Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-page">
  <div class="auth-shell">
    <section class="auth-brand-panel">
      <div class="brand-overlay"></div>
      <div class="brand-content">
        <div class="brand-badge">CSA</div>
        <p class="eyebrow light">Colegio San Agustin – Biñan</p>
        <h1>Clearance made <span>simpler.</span></h1>
        <p class="brand-copy">A clean, centralized student clearance experience designed for faster processing, clearer status tracking, and a more organized campus workflow.</p>

        <div class="brand-points">
          <div class="brand-point">
            <span class="icon-chip">✓</span>
            <div>
              <strong>Real-time progress</strong>
              <small>See your clearance status at a glance.</small>
            </div>
          </div>
          <div class="brand-point">
            <span class="icon-chip">↗</span>
            <div>
              <strong>Dynamic routing</strong>
              <small>Your request moves only through applicable offices.</small>
            </div>
          </div>
          <div class="brand-point">
            <span class="icon-chip">◎</span>
            <div>
              <strong>One secure portal</strong>
              <small>Students and school offices stay connected.</small>
            </div>
          </div>
        </div>
      </div>

      <div class="brand-footer">CARITAS • VERITAS • UNITAS</div>
    </section>

    <main class="auth-form-panel">
      <div class="auth-form-wrap">
        <div class="mobile-brand">
          <div class="brand-badge small">CSA</div>
          <div>
            <strong>E-Clearance</strong>
            <small><?= htmlspecialchars($schoolName) ?></small>
          </div>
        </div>

        <div class="form-heading">
          <span class="section-kicker">Welcome back</span>
          <h2>Sign in to E-Clearance</h2>
          <p>Enter your school credentials to continue.</p>
        </div>

        <form class="auth-form demo-form" data-redirect="dashboard.php">
          <div class="form-group">
            <label for="email">School Email</label>
            <div class="input-wrap">
              <span class="input-icon">✉</span>
              <input id="email" name="email" type="email" placeholder="name@school.edu.ph" required>
            </div>
          </div>

          <div class="form-group">
            <div class="label-row">
              <label for="password">Password</label>
              <a href="#" class="text-link small-link" data-toast="Password recovery is not connected in this front-end demo.">Forgot password?</a>
            </div>
            <div class="input-wrap">
              <span class="input-icon">●</span>
              <input id="password" name="password" type="password" placeholder="Enter your password" required minlength="6">
              <button type="button" class="password-toggle" aria-label="Show password">Show</button>
            </div>
          </div>

          <label class="check-row">
            <input type="checkbox" name="remember">
            <span>Remember me on this device</span>
          </label>

          <button type="submit" class="btn btn-primary btn-block">
            <span>Sign In</span>
            <span class="btn-arrow">→</span>
          </button>
        </form>

        <div class="divider"><span>New to E-Clearance?</span></div>

        <a class="btn btn-outline btn-block" href="register.php">Create Student Account</a>

        <p class="security-note"><span>🔒</span> Your information is protected and used only for official clearance transactions.</p>
      </div>
    </main>
  </div>

  <div class="toast" id="toast" role="status" aria-live="polite"></div>
  <script src="assets/js/app.js"></script>
</body>
</html>
