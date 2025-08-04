<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stanley High Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

  <header>
    <div class="logo-box">
      <img src="assets/logo.png" alt="Logo">
      <h1>Stanley High School</h1>
    </div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Portal</a>
      <a href="#">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h2>Welcome to Our Online Portal</h2>
      <p>Access student results, updates, and resources from anywhere.</p>
      <a href="check_result.php">Check Result</a>
      <a href="admin-login.php">Admin Login</a>
    </div>
    <img src="assets/hero.jpg" alt="Hero Image">
  </section>

  <section class="features">
    <div class="feature">
      <h3>Result Access</h3>
      <p>Students & parents can securely check term results online.</p>
    </div>
    <div class="feature">
      <h3>Latest News</h3>
      <p>Stay informed about school events, exams, and holidays.</p>
    </div>
    <div class="feature">
      <h3>About Us</h3>
      <p>Learn more about our mission, vision, and academic excellence.</p>
    </div>
  </section>

  <footer>
    © <?php echo date("Y"); ?> Greenwood High School | Built with ❤️ by Stanley Obimma
  </footer>

</body>
</html>
