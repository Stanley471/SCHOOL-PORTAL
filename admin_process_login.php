<?php
session_start();
//connect to the database
$conn = new mysqli("localhost", "root", "", "school_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = trim($_POST['username']);
$password = $_POST['password'];

// Fetch admin from DB
$sql = "SELECT * FROM admins WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();
    
    if (password_verify($password, $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $admin['username'];
        header("Location: admin-dashboard.php");
        exit();
    } else {
        echo "❌ Incorrect password";
    }
} else {
    echo "❌ Admin not found";
}

$stmt->close();
$conn->close();
?>
