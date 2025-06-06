<?php
$servername = "localhost";
$username = "root"; // Agar hostingda bo'lsa, username va password o'zgartiriladi
$password = "";
$dbname = "warehouse_db";

// Bazaga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bazaga ulanish amalga oshmadi: " . $conn->connect_error);
}
?>
