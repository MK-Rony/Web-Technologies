<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: loginForm.php");
    exit(); // Stop further execution
}

// Initialize $user variable
$user = array('dob' => '', 'mobile_number' => '', 'email' => '');

// Check if $user variable is set
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Profile</h2>
        <form action="../controller/editProfileController.php" method="post" onsubmit="return validate()" novalidate>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo isset($user['dob']) ? $user['dob'] : ''; ?>" required><br><br>
            <label for="mobile_number">Mobile Number:</label>
            <input type="text" id="mobile_number" name="mobile_number" value="<?php echo isset($user['mobile_number']) ? $user['mobile_number'] : ''; ?>" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" required><br><br>
            <input type="submit" value="Update Profile">
        </form>

        <form action="../view/dashboard.php" method="get">
            <input type="submit" value="Home Page">
        </form>
    </div>
</body>
</html>