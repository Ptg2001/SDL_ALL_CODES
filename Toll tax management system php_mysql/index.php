<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toll Tax Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Toll Tax Management System</h1>
        <form action="submit_vehicle.php" method="POST">
            <label for="vehicle_number">Vehicle Number:</label>
            <input type="text" id="vehicle_number" name="vehicle_number" required><br><br>

            <label for="vehicle_type">Vehicle Type:</label>
            <select id="vehicle_type" name="vehicle_type" required>
                <option value="Car">Car</option>
                <option value="Bus">Bus</option>
                <option value="Truck">Truck</option>
            </select><br><br>

            <label for="toll_amount">Toll Amount:</label>
            <input type="text" id="toll_amount" name="toll_amount" required><br><br>

            <button type="submit">Submit Vehicle Details</button>
        </form>
    </div>
</body>
</html>
