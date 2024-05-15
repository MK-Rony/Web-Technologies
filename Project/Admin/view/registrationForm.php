<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

    <script>
        function validate() {
            const username = document.getElementById("username");
            const password = document.getElementById("password");
            const dob = document.getElementById("dob");
            const mobile = document.getElementById("mobile");
            const email = document.getElementById("email");
            const securityQuestion = document.getElementById("security_question");
            const securityAnswer = document.getElementById("security_answer");

            let flag = true;

            // Validate username
            if (username.value === "") {
                flag = false;
                document.getElementById('error_username').innerHTML = "Please fill up the username";
            } else {
                document.getElementById('error_username').innerHTML = "";
            }

            // Validate password
            if (password.value === "") {
                flag = false;
                document.getElementById('error_password').innerHTML = "Please fill up the password";
            } else {
                document.getElementById('error_password').innerHTML = "";
            }

            // Validate date of birth
            if (dob.value === "") {
                flag = false;
                document.getElementById('error_dob').innerHTML = "Please fill up the date of birth";
            } else {
                document.getElementById('error_dob').innerHTML = "";
            }

            // Validate mobile number
            if (mobile.value === "") {
                flag = false;
                document.getElementById('error_mobile').innerHTML = "Please fill up the mobile number";
            } else {
                document.getElementById('error_mobile').innerHTML = "";
            }

            // Validate email
            if (email.value === "") {
                flag = false;
                document.getElementById('error_email').innerHTML = "Please fill up the email";
            } else {
                document.getElementById('error_email').innerHTML = "";
            }

            // Validate security question
            if (securityQuestion.value === "") {
                flag = false;
                document.getElementById('error_security_question').innerHTML = "Please fill up the security question";
            } else {
                document.getElementById('error_security_question').innerHTML = "";
            }

            // Validate security answer
            if (securityAnswer.value === "") {
                flag = false;
                document.getElementById('error_security_answer').innerHTML = "Please fill up the security answer";
            } else {
                document.getElementById('error_security_answer').innerHTML = "";
            }

            return flag;
        }
    </script>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="../controller/registrationController.php" method="post" onsubmit="return validate()" novalidate>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <span id="error_username" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="error_password" style="color: red;"></span><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob">
        <span id="error_dob" style="color: red;"></span><br>

        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile">
        <span id="error_mobile" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span id="error_email" style="color: red;"></span><br>

        <label for="security_question">Security Question:</label>
        <input type="text" id="security_question" name="security_question">
        <span id="error_security_question" style="color: red;"></span><br>

        <label for="security_answer">Security Answer:</label>
        <input type="text" id="security_answer" name="security_answer">
        <span id="error_security_answer" style="color: red;"></span><br>

        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="loginForm.php">Login here</a></p>
</body>
</html>