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

// Escape user inputs for security
$vehicle_number = $conn->real_escape_string($_POST['vehicle_number']);
$vehicle_type = $conn->real_escape_string($_POST['vehicle_type']);
$toll_amount = $conn->real_escape_string($_POST['toll_amount']);

// Insert vehicle details into database
$sql = "INSERT INTO vehicles (vehicle_number, vehicle_type, toll_amount) VALUES ('$vehicle_number', '$vehicle_type', '$toll_amount')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Vehicle details submitted successfully!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
