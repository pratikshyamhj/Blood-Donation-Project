


<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'blood_project';

$conn = new mysqli($hostname, $username, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteSql = "DELETE FROM requester_table WHERE id = $deleteId";

    if ($conn->query($deleteSql) === TRUE) {
        // Record deleted successfully
    } else {
        echo "Error deleting record: " . $conn->error;
    }


    $resetAutoIncrementSql = "ALTER TABLE requester_table AUTO_INCREMENT = 1";
    if ($conn->query($resetAutoIncrementSql) === TRUE) {
        
    } else {
        echo "Error resetting primary key: " . $conn->error;
    }
}


$sql = "SELECT * FROM requester_table";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin PanelR</title>
    <style>
    	*{
            margin: 0; padding: 0; box-sizing: border-box; 
            font-family: sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            border-color: darkred;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            background-color: lavenderblush;
        }

        th {
            background-color: lightcoral;
        }
        h1{
            text-align: center;
        }
        body{
            background-color: maroon;
        }
        @media (max-width: 850px) {
            table {
                font-size: 14px; /* Reduce font size for smaller screens */
            }

            th, td {
                padding: 6px; /* Adjust padding for smaller screens */
            }
        }
    </style>
</head>
<body>
    <h1>Requester list</h1>
    <a href="dashboard_admin.php" style="font-weight: bold; color: white;">Back to dashboard</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Age</th>
            <th>Contact Number</th>
            <th>Location</th>
            <th>Blood type</th>
            <th>message</th>
            <th>Operation</th>

            
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['blood_type'] . "</td>";
                
                echo "<td>" . $row['request_message'] . "</td>";
                echo "<td class='action-column'>";
                echo "<a href='Requesterr.php?id=" . $row['id'] . "' class='action-button edit'>Edit</a>";
                echo" ";
                 echo "<a href='?delete_id=" . $row['id'] . "' class='action-button delete'>Delete</a>";
                echo "</td>";
                echo "</tr>";
                
                
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>

