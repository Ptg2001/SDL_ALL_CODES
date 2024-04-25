<?php
require_once 'db.php';

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Edit User</h1>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" value="<?php echo $user['name']; ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>" required>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>
