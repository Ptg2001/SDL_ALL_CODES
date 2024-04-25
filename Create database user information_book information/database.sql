-- Open your web browser and go to http://localhost/phpmyadmin.
-- Click on "New" to create a new database.
-- Database Name: library
-- Collation: utf8mb4_unicode_ci

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255)
);

INSERT INTO books (title, author, description, image) VALUES 
('Book 1', 'Author 1', 'Description of Book 1', 'book1.jpg'),
('Book 2', 'Author 2', 'Description of Book 2', 'book2.jpg'),
('Book 3', 'Author 3', 'Description of Book 3', 'book3.jpg');