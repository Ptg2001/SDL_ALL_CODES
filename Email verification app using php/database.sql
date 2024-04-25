-- Open your web browser and go to http://localhost/phpmyadmin.
-- Click on "New" to create a new database.
-- Database Name: crud_app
-- Collation: utf8mb4_unicode_ci

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);
