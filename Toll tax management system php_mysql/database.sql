-- First Create a database named toll_tax_management_system in XAMPP Server under phpMyAdmin
-- Then run the following SQL commands to create the vehicles table

CREATE DATABASE toll_tax_management_system;

CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vehicle_number VARCHAR(20) NOT NULL,
    vehicle_type ENUM('Car', 'Bus', 'Truck') NOT NULL,
    toll_amount DECIMAL(10, 2) NOT NULL,
    payment_status ENUM('Paid', 'Unpaid') DEFAULT 'Unpaid',
    entry_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);