<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
        <!-- Add links/buttons for different actions -->
    </div>
</body>
</html>
