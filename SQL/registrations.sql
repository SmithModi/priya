CREATE TABLE registrations (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,
    address VARCHAR(100) NOT NULL,
    contact_no VARCHAR(15) NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    service VARCHAR(50) NOT NULL,
    start_date DATE NOT NULL,
    time TIME NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
