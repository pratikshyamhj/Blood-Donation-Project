
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #d9534f;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 20px;
        }

        .summary {
            display: flex;
            justify-content: space-between;
        }

        .summary-item {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            flex-basis: 48%;
            text-align: center;
        }

        .recent-activity {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Admin Dashboard</h1>
    </header>
    <div class="container">
        <div class="welcome-message">
            <h2>Hello, Admin!</h2>
        </div>
    </div>
        <div class="summary">
            <div class="summary-item">
                <h3>Total Donors</h3>
                <?php
            // Database connection code
            $dsn = "mysql:host=localhost;dbname=blood_project";
            $username = "root";
            $password = "";
            $tableName = "doner_table";

            try {
                $pdo = new PDO($dsn, $username, $password);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }

            // SQL query to count the rows
            $sql = "SELECT COUNT(*) as row_count FROM $tableName";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $rowCount = $result['row_count'];

            // Output the row count within the <p> tag
            echo "<p>$rowCount</p>";
            ?>
            </div>
            <div class="summary-item">
                <h3>Total Recipients</h3>
                <?php
            // Database connection code
            $dsn = "mysql:host=localhost;dbname=blood_project";
            $username = "root";
            $password = "";
            $tableName = "requester_table";

            try {
                $pdo = new PDO($dsn, $username, $password);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }

            // SQL query to count the rows
            $sql = "SELECT COUNT(*) as row_count FROM $tableName";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $rowCount = $result['row_count'];

            // Output the row count within the <p> tag
            echo "<p>$rowCount</p>";
            ?>
            </div>
        
        
    </div>
</body>
</html>