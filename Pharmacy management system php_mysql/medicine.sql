-- Table: medicines
CREATE TABLE medicines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    quantity INT NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

-- Table: sales
CREATE TABLE sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medicine_id INT,
    quantity_sold INT,
    total_price DECIMAL(10,2),
    sale_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (medicine_id) REFERENCES medicines(id)
);

-- Table: users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user'
);
