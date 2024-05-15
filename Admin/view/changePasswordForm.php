<?php

session_start();


// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: loginForm.php");
    exit(); // Stop further execution
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Change Password</h2>
        <form action="../controller/changePasswordController.php" method="post" onsubmit="return validate()" novalidate>
            <label for="old_password">Old Password:</label>
            <input type="password" id="old_password" name="old_password" required><br><br>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <input type="submit" value="Change Password">
        </form>
        
        <form action="../view/dashboard.php" method="get">
            <input type="submit" value="Home Page">
       </form>
    </div>
</body>
</html>
