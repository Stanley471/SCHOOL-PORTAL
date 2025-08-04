<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h2>Welcome, <?php echo $_SESSION['admin_username']; ?>!</h2>
  <p>This is the admin dashboard.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
