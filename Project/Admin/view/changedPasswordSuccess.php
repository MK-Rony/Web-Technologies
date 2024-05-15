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
    <title>Changed Password Success</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Changed Password Successful</h2>
        <p>You have changed your password successfully.</p>
        <p><a href="dashboard.php">Go back to Dashboard</a></p>
    </div>
</body>
</html>
