<?php
session_start();
require_once('../controller/profileController.php'); // Include the controller file
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
    <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h1>Profile</h1>
    <p>Username: <?php echo $user['username']; ?></p>
    <p>Date of Birth: <?php echo $user['dob']; ?></p>
    <p>Mobile Number: <?php echo isset($user['mobile_number']) ? $user['mobile_number'] : 'Not available'; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <a href="editProfileForm.php">Edit Profile</a>
</body>
</html>
