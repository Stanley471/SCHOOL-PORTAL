<?php
session_start();
// Check if the user is logged in and has the admin role
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: admin_login.php");
    exit();
}
// Include database connection
require_once '../config/database.php'; // Adjust the path as necessary  
// Fetch the admin's current profile data
$admin_username = $_SESSION['username'];
$sql = "SELECT * FROM admin WHERE username = ?";
$stmt = $conn->prepare($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Update Profile</title>
    <link rel="stylesheet" href="/SCHOOL_WEBSITE/assets/css/update_profile.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <h1>Update Profile</h1>
    <form action="process_update_profile.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" />

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" />

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" id="profile_picture" name="profile_picture" />

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required />

        <label for="other_names">Other Names:</label>
        <input type="text" id="other_names" name="other_names" required />

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>