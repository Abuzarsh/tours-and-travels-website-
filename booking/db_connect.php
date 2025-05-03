<?php
$servername = "localhost";  // Change if using a different server
$username = "root";         // Change if you set a MySQL username
$password = "";             // Change if you set a password
$dbname = "backpackers_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
