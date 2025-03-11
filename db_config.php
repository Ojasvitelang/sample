<?php
$servername = "localhost";
$username = "root"; // Default user for MySQL on XAMPP
$password = ""; // Leave empty unless you've set a password
$dbname = "jewellery_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>