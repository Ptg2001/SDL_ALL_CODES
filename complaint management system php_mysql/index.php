<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Complaint Management System</h1>
        <form action="submit_complaint.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="IT">IT</option>
                <option value="HR">HR</option>
                <option value="Finance">Finance</option>
            </select><br><br>

            <label for="complaint">Complaint:</label><br>
            <textarea id="complaint" name="complaint" rows="4" required></textarea><br><br>

            <button type="submit">Submit Complaint</button>
        </form>
    </div>
</body>
</html>
