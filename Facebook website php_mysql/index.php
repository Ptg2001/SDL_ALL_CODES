<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

$query = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome, <?php echo $user['username']; ?>!</h1>
        <a href="logout.php">Logout</a>
        <form action="post.php" method="post">
            <textarea name="content" placeholder="What's on your mind?"></textarea>
            <button type="submit">Post</button>
        </form>
        <div class="posts">
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="post">
                    <p><?php echo $row['content']; ?></p>
                    <span><?php echo $row['created_at']; ?></span>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>

</html>
