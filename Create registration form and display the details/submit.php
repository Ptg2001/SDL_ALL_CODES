<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Details</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
  <h2>Registration Details</h2>
  <div class="details">
    <p><strong>First Name:</strong> <?php echo $_POST["firstName"]; ?></p>
    <p><strong>Last Name:</strong> <?php echo $_POST["lastName"]; ?></p>
    <p><strong>Organization:</strong> <?php echo isset($_POST["organization"]) ? $_POST["organization"] : "N/A"; ?></p>
    <p><strong>Hobbies:</strong> <?php echo isset($_POST["hobbies"]) ? $_POST["hobbies"] : "N/A"; ?></p>
  </div>
</div>

</body>
</html>
