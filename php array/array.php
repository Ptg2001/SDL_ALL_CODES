<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Search</title>
</head>
<body>
    <h1>Employee Names</h1>
    <?php
    // Indexed array of employee names
    $employee_names = array(
        "John",
        "Jane",
        "Michael",
        "Emily",
        "David",
        "Sarah",
        "Robert",
        "Emma",
        "Christopher",
        "Olivia",
        "Daniel",
        "Ava",
        "Matthew",
        "Sophia",
        "Andrew",
        "Mia",
        "James",
        "Isabella",
        "William",
        "Ethan"
    );

    // Check if a name is submitted via form
    if (isset($_POST['search'])) {
        $search_name = $_POST['search'];

        // Search for the name in the array
        if (in_array($search_name, $employee_names)) {
            echo "<p>$search_name is an employee.</p>";
        } else {
            echo "<p>$search_name is not found in the list of employees.</p>";
        }
    }
    ?>

    <form method="post">
        <label for="search">Search for an employee:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Search</button>
    </form>
</body>
</html>
