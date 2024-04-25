<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$database = "complaint_management_system";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$department = $conn->real_escape_string($_POST['department']);
$complaint = $conn->real_escape_string($_POST['complaint']);

// Insert complaint into database
$sql = "INSERT INTO complaints (name, email, department, complaint) VALUES ('$name', '$email', '$department', '$complaint')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Complaint submitted successfully!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
