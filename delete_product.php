<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'blood_project';

$conn = new mysqli($hostname, $username, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the record exists before deleting it
    $checkSql = "SELECT * FROM requester_table WHERE id = $id";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows === 0) {
        echo "Record with ID $id not found.";
        exit;
    }

    // Delete the record
    $deleteSql = "DELETE FROM requester_table WHERE id = $id";

    if ($conn->query($deleteSql) === TRUE) {
        // Reset the auto-increment value to 1
        $resetAutoIncrementSql = "ALTER TABLE requester_table AUTO_INCREMENT = 1";
        $conn->query($resetAutoIncrementSql);

        header("Location: req_dash.php"); // Redirect back to the list page after successful deletion
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
