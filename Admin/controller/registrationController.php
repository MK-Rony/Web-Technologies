<?php
session_start();
require_once('../model/UserModel.php');

// Establish database connection
$conn = new mysqli("localhost", "root", "", "my_app");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate username
        if (empty($_POST['username'])) {
            echo "Username is required!";
            exit();
        }
        // Validate password
        if (empty($_POST['password'])) {
            echo "Password is required!";
            exit();
        }
        // Validate date of birth
        if (empty($_POST['dob'])) {
            echo "Date of Birth is required!";
            exit();
        }
        // Validate mobile number
        if (empty($_POST['mobile'])) {
            echo "Mobile Number is required!";
            exit();
        }
        // Validate email
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address!";
            exit();
        }
        // Validate security question
        if (empty($_POST['security_question'])) {
            echo "Security Question is required!";
            exit();
        }
        // Validate security answer
        if (empty($_POST['security_answer'])) {
            echo "Security Answer is required!";
            exit();
        }
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $security_question = $_POST['security_question'];
        $security_answer = $_POST['security_answer'];
        
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["dob"] = $dob;
        $_SESSION["username"] = $username;
        $_SESSION["mobile"] = $mobile;
        $_SESSION["email"] = $email;

    $userModel = new UserModel($conn);

    $existingUser = $userModel->getUser($username);
    if ($existingUser) {
        echo "Username already exists!";
    } else {
        if ($userModel->createUser($username, $password, $dob, $mobile, $email, $security_question, $security_answer)) {
            header("Location: ../view/registrationSuccess.php");
            exit();
        } else {
            echo "Error creating user!";
        }
    }
}
}
?>