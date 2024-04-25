<?php
require_once 'db.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>CRUD Application</h1>
        <a href="add.php" class="btn">Add User</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
