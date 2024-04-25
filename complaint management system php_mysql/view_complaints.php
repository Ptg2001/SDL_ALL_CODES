<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$database = "complaint_management_system";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch complaints from database
$sql = "SELECT * FROM complaints";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaints - Complaint Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Complaint Management System</h1>
        <h2>View Complaints</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Complaint</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['complaint'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No complaints found</td></tr>";
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
