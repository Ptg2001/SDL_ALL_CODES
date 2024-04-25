<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for MySQL
$password = "";     // Default password for MySQL is empty
$database = "toll_tax_management_system";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch vehicle details from database
$sql = "SELECT * FROM vehicles";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Vehicles - Toll Tax Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Toll Tax Management System</h1>
        <h2>View Vehicle Details</h2>
        <table>
            <tr>
                <th>Vehicle Number</th>
                <th>Vehicle Type</th>
                <th>Toll Amount</th>
                <th>Payment Status</th>
                <th>Entry Time</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['vehicle_number'] . "</td>";
                    echo "<td>" . $row['vehicle_type'] . "</td>";
                    echo "<td>" . $row['toll_amount'] . "</td>";
                    echo "<td>" . $row['payment_status'] . "</td>";
                    echo "<td>" . $row['entry_time'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No vehicles found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
