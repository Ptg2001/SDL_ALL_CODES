<?php
require_once 'db.php';

$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library Catalog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Library Catalog</h1>
        <div class="books">
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="book">
                    <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                    <h2><?php echo $row['title']; ?></h2>
                    <h3>By <?php echo $row['author']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>

</html>
