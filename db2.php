<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "orders1"; // your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}
?>

