<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: loginForm.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h2>Reset Password</h2>
    <form action="../controller/resetPasswordController.php" method="post">
        <input type="hidden" name="username" value="<?php echo $_GET['username']; ?>">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
