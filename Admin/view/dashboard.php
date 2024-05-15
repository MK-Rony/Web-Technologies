<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: loginForm.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $username; ?></h2>
        <p>This is your dashboard.</p>
        <form action="../controller/logoutController.php" method="post">
            <input type="submit" value="Logout">
        </form>
        <form action="../view/changePasswordForm.php" method="get">
            <input type="submit" value="Change Password">
        </form>
        <form action="../view/editProfileForm.php" method="get">
            <input type="submit" value="Profile">
        </form>
        <form action="../view/productManagement.php" method="get">
            <input type="submit" value="Product Management">
        </form>
        <form action="../view/orderManagement.php" method="get">
            <input type="submit" value="Order Management">
        </form>
        <form action="../view/userManagement.php" method="get">
            <input type="submit" value="User Management">
        </form>
        <form action="../view/inventoryManagement.php" method="get">
            <input type="submit" value="Inventory Management">
        </form>
        <form action="../view/orderManagement.php" method="get">
            <input type="submit" value="Order Management">
        </form>
    </div>
</body>
</html>
