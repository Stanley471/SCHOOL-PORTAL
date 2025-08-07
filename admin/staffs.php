<?php
session_start();
// Check if the user is logged in and has the admin role
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: admin_login.php");
    exit();
}

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
   <h1>Staff Management</h1>
   <table>
       <thead>
           <tr>
               <th>ID</th>
               <th>Username</th>
               <th>Email</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
          
       </tbody>
   </table>
</body>
</html>