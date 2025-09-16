<?php
include 'db_connect.php';
session_start();

// Check if seller is logged in
if (!isset($_SESSION['seller_id'])) {
    header("Location: SellerLogin.php");
    exit;
}

// Get seller ID from session
$seller_id = $_SESSION['seller_id'];

// Get form data
$product_image=$_FILES['product_image']['name'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$type = $_POST['type'];
$rental_period = isset($_POST['rental_period']) ? $_POST['rental_period'] : NULL;

// Insert data into the database
$sql = "INSERT INTO products (seller_id, name, description, price, type, rental_period)
        VALUES ('$seller_id', '$name', '$description', '$price', '$type', " . ($type === 'Rent' ? "'$rental_period'" : "NULL") . ")";

if ($conn->query($sql) === TRUE) {
    echo "Product uploaded successfully";
    // Redirect to the dashboard or another page
    header("Location: SellerDashboard.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
