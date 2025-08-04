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
    <h2>Check Your Result</h2>
    <form action="view-result.php" method="POST">
      <label for="student_id">Enter Your Serial Number / Student ID</label>
      <input type="text" name="student_id" id="student_id" required>
      <label for="academic_year">Select Academic Year</label>
      <select name="academic_year" id="academic_year" required>
        <option value="">--Select Year--</option>
        <option value="2025">2025</option>
        <option value="2024">2024</option>
        <option value="2023">2023</option>
      </select>
      <button type="submit">View Result</button>
    </form>
    <div class="admin-link">
      <a href="admin_login.php">Staff Login</a>
    </div>
  </div>

  <footer>
    © <?php echo date("Y"); ?> Stanley Obimma | University of Nigeria, Nsukka
  </footer>
</body>
</html>
