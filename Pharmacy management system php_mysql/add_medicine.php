<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include("functions.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    if(addMedicine($name, $description, $quantity, $price)) {
        $success = "Medicine added successfully!";
    } else {
        $error = "Error adding medicine. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Add Medicine</h2>
        <?php if(isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <?php if(isset($success)) { ?>
            <p class="success"><?php echo $success; ?></p>
        <?php } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="name" placeholder="Medicine Name" required>
            <textarea name="description" placeholder="Description"></textarea>
            <input type="number" name="quantity" placeholder="Quantity" required>
            <input type="number" name="price" placeholder="Price" required>
            <button type="submit">Add Medicine</button>
        </form>
    </div>
</body>
</html>
