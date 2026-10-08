<?php
$studentName = 'Jasper Ilisan';
$studentId = '2026-10482';
$program = 'BS Information Technology';
$progress = 67;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Clearance | Student Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="dashboard-page">
  <div class="app-shell">
    <aside class="sidebar" id="sidebar">
      <div class="sidebar-brand">
        <div class="brand-badge small">CSA</div>
        <div>
          <strong>E-Clearance</strong>
          <small>Student Portal</small>
        </div>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-item active" href="#overview"><span>⌂</span> Overview</a>
        <a class="nav-item" href="#clearance"><span>✓</span> My Clearance</a>
        <a class="nav-item" href="#requirements"><span>▤</span> Requirements</a>
        <a class="nav-item" href="#notifications"><span>◉</span> Notifications <em>3</em></a>
        <a class="nav-item" href="#profile"><span>○</span> Profile</a>
      </nav>

      <div class="sidebar-help">
        <span class="help-icon">?</span>
        <strong>Need help?</strong>
        <p>Contact the Registrar's Office for clearance concerns.</p>
        <button class="text-button" data-toast="Support contact is a demo feature.">Contact support</button>
      </div>

      <a class="nav-item logout-link" href="index.php"><span>↪</span> Sign Out</a>
    </aside>

    <main class="main-content">
      <header class="topbar">
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">☰</button>
        <div class="topbar-title">
          <p>Academic Year 2026–2027</p>
          <h1>Student Clearance</h1>
        </div>
        <div class="topbar-actions">
          <button class="icon-button" data-toast="You have 3 unread notifications.">🔔<span class="notification-dot"></span></button>
          <div class="profile-chip">
            <div class="avatar">JI</div>
            <div><strong><?= htmlspecialchars($studentName) ?></strong><small><?= htmlspecialchars($studentId) ?></small></div>
            <span>⌄</span>
          </div>
        </div>
      </header>

      <section class="dashboard-content" id="overview">
        <div class="welcome-card">
          <div class="welcome-copy">
            <span class="welcome-label">CURRENT CLEARANCE PERIOD</span>
            <h2>Good day, <?= htmlspecialchars(explode(' ', $studentName)[0]) ?>.</h2>
            <p>Your clearance is moving forward. Complete the remaining requirements to finish your semester clearance.</p>
            <button class="btn btn-light" data-toast="Your request is already active in this demo.">View Active Request <span>→</span></button>
          </div>
          <div class="progress-orb" style="--progress: <?= (int)$progress ?>">
            <div class="orb-inner">
              <strong><?= (int)$progress ?>%</strong>
              <span>Completed</span>
            </div>
          </div>
        </div>

        <div class="stats-grid">
          <article class="stat-card">
            <div class="stat-icon approved">✓</div>
            <div><span>Approved Offices</span><strong>4</strong><small>of 6 offices</small></div>
          </article>
          <article class="stat-card">
            <div class="stat-icon pending">⌛</div>
            <div><span>Pending</span><strong>1</strong><small>awaiting review</small></div>
          </article>
          <article class="stat-card">
            <div class="stat-icon action">!</div>
            <div><span>Needs Action</span><strong>1</strong><small>requirement returned</small></div>
          </article>
          <article class="stat-card">
            <div class="stat-icon route">↗</div>
            <div><span>Current Route</span><strong>5 / 6</strong><small>Student Affairs</small></div>
          </article>
        </div>

        <div class="content-grid">
          <section class="panel" id="clearance">
            <div class="panel-header">
              <div><span class="section-kicker">Live progress</span><h3>Clearance Workflow</h3></div>
              <span class="status-pill active-status">In Progress</span>
            </div>

            <div class="timeline">
              <div class="timeline-item complete">
                <div class="timeline-marker">✓</div>
                <div class="timeline-body"><strong>Registrar's Office</strong><p>Student record verified</p><small>Approved • Oct 2, 2026</small></div>
                <span class="mini-status success">Approved</span>
              </div>
              <div class="timeline-item complete">
                <div class="timeline-marker">✓</div>
                <div class="timeline-body"><strong>Library</strong><p>No outstanding books or penalties</p><small>Approved • Oct 3, 2026</small></div>
                <span class="mini-status success">Approved</span>
              </div>
              <div class="timeline-item complete">
                <div class="timeline-marker">✓</div>
                <div class="timeline-body"><strong>Accounting Office</strong><p>Account balance verified</p><small>Approved • Oct 4, 2026</small></div>
                <span class="mini-status success">Approved</span>
              </div>
              <div class="timeline-item complete">
                <div class="timeline-marker">✓</div>
                <div class="timeline-body"><strong>IT Laboratory</strong><p>Equipment accountability cleared</p><small>Approved • Oct 5, 2026</small></div>
                <span class="mini-status success">Approved</span>
              </div>
              <div class="timeline-item current">
                <div class="timeline-marker">5</div>
                <div class="timeline-body"><strong>Student Affairs Office</strong><p>Currently reviewing your request</p><small>Submitted • Oct 6, 2026</small></div>
                <span class="mini-status waiting">Pending</span>
              </div>
              <div class="timeline-item returned">
                <div class="timeline-marker">!</div>
                <div class="timeline-body"><strong>Academic Department</strong><p>Missing adviser confirmation</p><small>Please upload the required document</small></div>
                <button class="mini-action" data-toast="Upload module is a front-end demo.">Resolve</button>
              </div>
            </div>
          </section>

          <aside class="right-column">
            <section class="panel action-panel" id="requirements">
              <div class="panel-header"><div><span class="section-kicker">Attention</span><h3>Action Required</h3></div></div>
              <div class="action-card">
                <div class="action-top"><span class="alert-dot">!</span><strong>Adviser Confirmation</strong></div>
                <p>Your department returned this requirement. Upload a signed adviser confirmation to continue.</p>
                <button class="btn btn-primary btn-block" data-toast="Upload interface is a front-end demo.">Upload Document</button>
              </div>
            </section>

            <section class="panel profile-panel" id="profile">
              <div class="panel-header"><div><span class="section-kicker">Student details</span><h3>Profile</h3></div><button class="text-button" data-toast="Profile editing is a demo feature.">Edit</button></div>
              <div class="profile-details">
                <div><span>Student ID</span><strong><?= htmlspecialchars($studentId) ?></strong></div>
                <div><span>Program</span><strong><?= htmlspecialchars($program) ?></strong></div>
                <div><span>Year Level</span><strong>4th Year</strong></div>
                <div><span>School Email</span><strong>jasper@school.edu.ph</strong></div>
              </div>
            </section>
          </aside>
        </div>
      </section>
    </main>
  </div>

  <div class="toast" id="toast" role="status" aria-live="polite"></div>
  <script src="assets/js/app.js"></script>
</body>
</html>
