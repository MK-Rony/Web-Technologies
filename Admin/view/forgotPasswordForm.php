<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="../controller/forgotPasswordController.php" method="post" onsubmit="return validate()" novalidate>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="security_answer">Security Answer:</label>
            <input type="text" id="security_answer" name="security_answer" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
