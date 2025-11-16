<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Velvet Vogue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard">
    <h1>Welcome, <?php echo $_SESSION["admin"]; ?>!</h1>
    <ul>
        <li><a href="#">Manage Products</a></li>
        <li><a href="#">View Orders</a></li>
        <li><a href="#">Manage Users</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
</body>
</html>
