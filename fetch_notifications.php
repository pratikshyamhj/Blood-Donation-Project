<?php
include('db_connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
   
    $password = $_POST['password']; // The plain text password

    
    // Initialize an empty array to store ASCII values
    $asciiPassword = [];

    // Convert each character to its ASCII value
    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];
        $asciiValue = ord($char) + 11; // Get the ASCII value
        $asciiPassword[] = $asciiValue;
    }
    $convertedPassword = implode('', array_map('chr', $asciiPassword));

    

    // Data insertion into the table
    $sql = "INSERT INTO admin_table (username, password)
    VALUES ('$username', '$convertedPassword')";

    


    // Close the database connection
    $conn->close();
}
?>