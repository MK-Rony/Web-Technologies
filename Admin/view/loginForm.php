<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">


    <script>
        function validate() {
            const x = document.getElementById("username");
            const y = document.getElementById("password");
            const error1 = document.getElementById('error1');
            const error2 = document.getElementById('error2');
        
            let flag = true;
            error1.innerHTML = ""; 
            error2.innerHTML = ""; 
        
            if (x.value === "") {
                flag = false;
                error1.innerHTML = "Please fill up the username";
            }
            if (y.value === "") {
                flag = false;
                error2.innerHTML = "Please fill up the password";
            }
        
            return flag;
        }
    </script>
</head>
<body>
    <h2>Login Form</h2>
    <form action="../controller/loginController.php" method="post" onsubmit="return validate()" novalidate>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" <br>
        <span id="error1" style="color: red;"></span><br> 
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <span id="error2" style="color: red;"></span><br>
        
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="registrationForm.php">Register here</a></p>
    <p>Forgot your password? <a href="forgotPasswordForm.php">Reset Password</a></p>
    <p>Change Account? <a href = "http://localhost/project/Index.php">Home Page</a></p>
</body>
</html>