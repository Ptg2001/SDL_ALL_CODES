<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $content = $_POST['content'];

    $query = "INSERT INTO posts (user_id, content) VALUES ($user_id, '$content')";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit;
}
?>
