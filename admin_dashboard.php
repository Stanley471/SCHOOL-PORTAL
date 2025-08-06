<?php
session_start();

// Optional: protect the dashboard page (require login)
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - Stanley High School</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/admin_dashboard.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <div class="sidebar" id="sidebar">
    <h2>Admin Panel</h2>
    <ul>
      <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
      <li><a href="#"><i class="fas fa-user-graduate"></i> Students</a></li>
      <li><a href="#"><i class="fas fa-book"></i> Results</a></li>
      <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Staff</a></li>
      <li><a href="admin/update_profile.php"><i class="fas fa-user"></i> Update Profile</a></li>
      <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
  </div>

  <div class="content">
    <div class="dashboard-header">
      <h1>Welcome, Admin</h1>
      <p><i class="fas fa-calendar-day"></i> Today is <?php echo date('l, F j, Y'); ?></p>
    </div>

    <div class="stats">
      <div class="stat-card">
        <h2>320</h2>
        <p>Total Students</p>
      </div>
      <div class="stat-card">
        <h2>75%</h2>
        <p>Attendance Rate</p>
      </div>
      <div class="stat-card">
        <h2>48</h2>
        <p>Subjects Offered</p>
      </div>
      <div class="stat-card">
        <h2>23</h2>
        <p>Registered Staff</p>
      </div>
    </div>
  </div>

  <script>
  const toggleBtn = document.getElementById('toggleSidebar');
  const sidebar = document.getElementById('sidebar');
  const mainContent = document.getElementById('mainContent');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    mainContent.classList.toggle('collapsed');
  });
</script>

</body>
</html>
