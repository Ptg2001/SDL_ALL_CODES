<!DOCTYPE html>
<html>
<head>
    <title>Shape Area Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Select a Shape:</h2>
        <form id="shapeForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label><input type="radio" name="shape" value="triangle"> Triangle</label>
            <label><input type="radio" name="shape" value="circle"> Circle</label>
            <label><input type="radio" name="shape" value="square"> Square</label>
            <br><br>
            <input type="submit" name="submit" value="Select Shape">
        </form>
    </div>
    <?php

    class Shape {
        // Common properties or methods for all shapes can be defined here
    }

    class Triangle extends Shape {
        private $base;
        private $height;

        public function __construct($base, $height) {
            $this->base = $base;
            $this->height = $height;
        }

        public function calculateArea() {
            return 0.5 * $this->base * $this->height;
        }
    }

    class Square extends Shape {
        private $side;

        public function __construct($side) {
            $this->side = $side;
        }

        public function calculateArea() {
            return $this->side * $this->side;
        }
    }

    class Circle extends Shape {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pi() * $this->radius * $this->radius;
        }
    }

    // Check if a shape is selected
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $selectedShape = $_POST["shape"];

        switch ($selectedShape) {
            case "triangle":
                ?>
                <div class="container">
                    <h2>Triangle Area Calculator</h2>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <label>Enter Base:</label>
                        <input type="number" name="base" required>
                        <br><br>
                        <label>Enter Height:</label>
                        <input type="number" name="height" required>
                        <br><br>
                        <input type="submit" name="calculate_triangle" value="Calculate Area">
                    </form>
                </div>
                <?php
                break;
            case "circle":
                ?>
                <div class="container">
                    <h2>Circle Area Calculator</h2>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <label>Enter Radius:</label>
                        <input type="number" name="radius" required>
                        <br><br>
                        <input type="submit" name="calculate_circle" value="Calculate Area">
                    </form>
                </div>
                <?php
                break;
            case "square":
                ?>
                <div class="container">
                    <h2>Square Area Calculator</h2>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <label>Enter Side:</label>
                        <input type="number" name="side" required>
                        <br><br>
                        <input type="submit" name="calculate_square" value="Calculate Area">
                    </form>
                </div>
                <?php
                break;
            default:
                echo "Please select a shape.";
        }
    }

    // Calculate and display the area
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["calculate_triangle"])) {
            $base = $_POST["base"];
            $height = $_POST["height"];
            $triangle = new Triangle($base, $height);
            echo "<div class='container'>Area of Triangle: " . $triangle->calculateArea() . "</div>";
        } elseif (isset($_POST["calculate_circle"])) {
            $radius = $_POST["radius"];
            $circle = new Circle($radius);
            echo "<div class='container'>Area of Circle: " . $circle->calculateArea() . "</div>";
        } elseif (isset($_POST["calculate_square"])) {
            $side = $_POST["side"];
            $square = new Square($side);
            echo "<div class='container'>Area of Square: " . $square->calculateArea() . "</div>";
        }
    }
    ?>
</body>
</html>