<?php
include 'config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce Platform</title>
</head>
<body>
    <h1>Welcome to our E-commerce Platform</h1>

    <a href="add_product.php">Add Product</a>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p>Price: $" . $row["price"] . "</p>";
            echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' width='200'>";
            echo "<button>Add to Cart</button>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
