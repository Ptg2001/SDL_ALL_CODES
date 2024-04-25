<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include("functions.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];

    if(addStudent($name, $email, $phone, $address, $date_of_birth, $gender)) {
        $success = "Student added successfully!";
    } else {
        $error = "Error adding student. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        select {
            height: 40px;
        }
        textarea {
            height: 100px;
        }
        button[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add Student</h2>
        <?php if(isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <?php if(isset($success)) { ?>
            <p class="success"><?php echo $success; ?></p>
        <?php } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <textarea name="address" placeholder="Address"></textarea>
            <input type="date" name="date_of_birth" placeholder="Date of Birth" required>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <button type="submit">Add Student</button>
        </form>
    </div>
</body>
</html>
