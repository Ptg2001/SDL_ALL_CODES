-- Table: students
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT,
    date_of_birth DATE NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    application_status ENUM('Pending', 'Accepted', 'Rejected') DEFAULT 'Pending'
);

-- Table: courses
CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    duration INT NOT NULL, -- Duration in years
    fees DECIMAL(10,2) NOT NULL
);

-- Table: admissions
CREATE TABLE admissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    course_id INT,
    admission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id),
    FOREIGN KEY (course_id) REFERENCES courses(id)
);
