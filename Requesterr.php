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
    $sql = "SELECT * FROM requester_table WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No data found for ID: $id";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $blood_type = $_POST['blood_type'];
    $request_message = $_POST['request_message'];

    $updateSql = "UPDATE requester_table SET name = '$name', email = '$email', age = '$age', contact = '$contact', location = '$location', blood_type = '$blood_type', request_message = '$request_message' WHERE id = $id";

    if ($conn->query($updateSql) === TRUE) {
        header("Location: req_dash.php"); // Redirect back to the list page after successful update
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Requester Data</title>
   <style>
    body {
        font-family: Arial, sans-serif;
        background-color: lightpink;
    }

    h1 {
        text-align: center;
    }

    form {
        width: 40%;
        margin: 0 auto;
        background-color: #d21f3c;
        border-radius: 50px;
        padding: 20px;
        border: 2px solid #000;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #fff;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="password"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    textarea {
        height: 150px;
    }

    button[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0074CC;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
  
</style>

</head>
<body>
    <h1>Edit Requester Data</h1>
    <form method="POST" action="">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $row['age']; ?>" required><br>

        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" value="<?php echo $row['contact']; ?>" required><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="<?php echo $row['location']; ?>" required><br>

        <label for="blood_type">Blood Type:</label>
        <input type="text" id="blood_type" name="blood_type" value="<?php echo $row['blood_type']; ?>" required><br>

        <label for="request_message">Request Message:</label>
        <textarea id="request_message" name="request_message" required><?php echo $row['request_message']; ?></textarea><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
