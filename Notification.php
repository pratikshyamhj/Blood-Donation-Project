<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sendNotification($user_id, $message, $conn) {
    $sql = "INSERT INTO notifications (user_id, message) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $message);

    if ($stmt->execute()) {
        return "Notification sent successfully.";
    } else {
        return "Error: " . $stmt->error;
    }

    $stmt->close();
}

if (isset($_POST['submit_donor'])) {
    $donor_name = $_POST['username'];
    $donor_email = $_POST['u_email'];

    // Process the donor form data

    // Send a notification to admins
    $admin_id = 1; // Replace with the admin's ID
    $message = "New donor submitted: $donor_name ($donor_email)";
    sendNotification($admin_id, $message, $conn);
}

if (isset($_POST['submit_requester'])) {
    $requester_name = $_POST['name'];
    $requester_email = $_POST['u_email'];

    // Process the requester form data

    // Send a notification to admins
    $admin_id = 1; // Replace with the admin's ID
    $message = "New requester submitted: $requester_name ($requester_email)";
    sendNotification($admin_id, $message, $conn);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <?php
include('donor_dash.php');

include('req_dash.php');
?>


    <h2>Notifications</h2>
    <div id="notification-container">
        <!-- Notifications will be displayed here -->
    </div>

    <script>
        function displayNotifications() {
            // Use AJAX to fetch notifications from the server
            fetch('fetch_notifications.php')
                .then(response => response.json())
                .then(data => {
                    var container = document.getElementById("notification-container");
                    container.innerHTML = ""; // Clear existing notifications

                    if (data.length > 0) {
                        for (var i = 0; i < data.length; i++) {
                            var notification = document.createElement("div");
                            notification.className = "notification";
                            notification.innerHTML = data[i].message;
                            container.appendChild(notification);
                        }
                    } else {
                        container.innerHTML = "<p>No notifications to display.</p>";
                    }
                });
        }

        // Fetch notifications every 5 seconds (adjust as needed)
        setInterval(displayNotifications, 5000);
    </script>
</body>
</html>

<?php
$conn->close();
?>
