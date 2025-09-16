<?php
// Enable error reporting for all errors
error_reporting(E_ALL);

// Display errors in the browser (remove this line in production)
ini_set('display_errors', 1);



// Define the permanent admin credentials
$permanentUsername = "admin";
$permanentPassword = "admin123"; // You should use a more secure password in a real application

// Retrieve user input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$username = $_POST["username"];
$password = $_POST["password"];

// Check if the provided username and password match the permanent credentials
if ($username === $permanentUsername && $password === $permanentPassword) {
    // Start a session and store the user's login status
    session_start();
    $_SESSION["loggedin"] = true;
     


    // Redirect the user to the next HTML page (e.g., dashboard.html)
    header("Location: dashboard_admin.php");
    exit;
} else {
    // Redirect back to the login page with an error message
    header("Location: index.php?error=1");
    exit;
}
}
?>
