<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>School Result Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/check_results.css">
</head>
<body>
  <header>
    <h1>Stanley High School</h1>
    <p>Online Student Result Portal</p>
  </header>

  <div class="container">
    <h2>Staff Login Here</h2>
    <form action="admin_process_login.php" method="POST">
      <label for="username">Enter Username</label>
      <input type="text" name="username" id="username" required>
      <label for="password">Enter Password</label>
      <input type="password" name="password" id="password" required>
      <button type="submit">Login</button>
    </form>
    <div class="admin-link">
      <a href="check_result.php">Student Login</a>
    </div>
  </div>

  <footer>
    © <?php echo date("Y"); ?> Stanley Obimma | University of Nigeria, Nsukka
  </footer>
</body>
</html>
