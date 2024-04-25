<?php
include('db.php');

function addMedicine($name, $description, $quantity, $price) {
    global $conn;
    $sql = "INSERT INTO medicines (name, description, quantity, price) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdd", $name, $description, $quantity, $price);
    return $stmt->execute();
}

function makeSale($medicine_id, $quantity_sold, $total_price) {
    global $conn;
    $sql = "INSERT INTO sales (medicine_id, quantity_sold, total_price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $medicine_id, $quantity_sold, $total_price);
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
