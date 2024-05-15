<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: loginForm.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout Success</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h2>Logout Successful</h2>
    <p>You have been logged out successfully.</p>
    <p><a href="loginForm.php">Login here</a></p>
</body>
</html>
