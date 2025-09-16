
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
<?php 
include('db_connection.php');

?>

		<div class="container">
		<div class="box form-box">
	<h2>Admin Login</h2>
            <form action="admin.php" method="post" target="_blank">
            	<div class="field input">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
            </div>
                <div class="field input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
            </div>
            <div class="field">
                <input type="submit" value="Login" onclick="checkLogin()">
            </div>
            </form>

</div>
</div>
<script>
        // Define your admin credentials (not secure in production)
        const adminUsername = "admin";
        const adminPassword = "adminpassword";

        function checkLogin() {
            const usernameInput = document.getElementById("username").value;
            const passwordInput = document.getElementById("password").value;

            if (usernameInput === adminUsername && passwordInput === adminPassword) {
                
                window.location.href = "dashboard_admin.php";
                // Redirect to admin panel or perform admin actions here
            } else {
                alert("Invalid username or password. Please try again.");
                document.getElementById("password").value = "";
            }
        }
    </script>
</body>
</html>