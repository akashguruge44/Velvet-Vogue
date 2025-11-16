<?php
session_start();
require '../db.php'; // Adjust path if db.php is not in parent folder

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get raw input (trim to remove accidental spaces)
    $inputUser = isset($_POST['username']) ? trim($_POST['username']) : '';
    $inputPass = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Hardcoded credentials
    $hardUser = 'admin';
    $hardPass = 'admin123';

    // Check hardcoded credentials (plaintext match)
    if ($inputUser === $hardUser && $inputPass === $hardPass) {
        // Set session value and redirect to dashboard
        $_SESSION["admins"] = $inputUser;
        header("Location: Firstdashboard.php");
        exit();
    } else {
        // Invalid credentials
         $error = "Invalid username or password!";
        // You can show $error in your HTML form below
    }
} else {
    // Not a POST request — optionally handle GET (show login form)
    $error = '';
}