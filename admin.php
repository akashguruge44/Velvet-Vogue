<?php
session_start();
require '../db.php'; // Adjust path if db.php is not in parent folder

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Login success
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location:Add_Product.php'); 
    } else {
        // Login failed
        header('Location: index.php?error=1'); 
        exit;
    }
} else {
    header('Location: index.php'); // Redirect back to login if accessed directly
    exit;
}