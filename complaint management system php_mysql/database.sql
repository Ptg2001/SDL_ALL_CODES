-- First Create a database named complaint_management_system in XAMPP Server under phpMyAdmin
-- Then run the following SQL commands to create the vehicles table

CREATE DATABASE complaint_management_system;

CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    department VARCHAR(255) NOT NULL,
    complaint TEXT NOT NULL,
    status ENUM('Pending', 'Resolved') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
