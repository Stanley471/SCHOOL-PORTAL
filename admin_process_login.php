<?php
session_start();
//connect to the database
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "school_portal";
$conn = new mysqli($serverName, $username, $password, $dbname);

//error message if the conn failed
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}


//collect form data
$username = $_POST['username'];
$password = $_POST['password'];

// Fetch admin from DB
$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // User exists, start session
    $_SESSION["username"] = $username;
    $_SESSION["role"] = "admin"; // Set user role to admin
    // Redirect to admin dashboard or homepage
    header("Location: admin_dashboard.php");
    echo "✅ Login successful. Welcome, $username!";
} else {
    // User does not exist
    echo "❌ Invalid username or password. Please try again.";
}


// Close the database connection
$conn->close();
?>
