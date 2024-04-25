<?php
include('db.php');

function addStudent($name, $email, $phone, $address, $date_of_birth, $gender) {
    global $conn;
    $sql = "INSERT INTO students (name, email, phone, address, date_of_birth, gender) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $email, $phone, $address, $date_of_birth, $gender);
    return $stmt->execute();
}

function applyAdmission($student_id, $course_id) {
    global $conn;
    $sql = "INSERT INTO admissions (student_id, course_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $student_id, $course_id);
    return $stmt->execute();
}

function authenticateUser($username, $password) {
    global $conn;
    $sql = "SELECT id, username, role FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
?>
