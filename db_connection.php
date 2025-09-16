<?php
// Database configuration
$db_host = 'localhost'; // Replace with your MySQL host
$db_username = 'root'; // Replace with your MySQL username
$db_password = ''; // Replace with your MySQL password
$db_name = 'blood_Project'; // Replace with your MySQL database name

// Create a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>