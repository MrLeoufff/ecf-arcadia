CREATE DATABASE IF NOT EXISTS Arcadia_db CHARACTER SET utf8 COLLATE utf8_general_ci;

USE arcadia_db;

CREATE TABLE habitat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    image JSON
);

CREATE TABLE animal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    race VARCHAR(150) NOT NULL,
    image JSON,
    habitat_id INT,
    FOREIGN KEY (habitat_id) REFERENCES habitat(id)
);

CREATE TABLE service (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    image JSON
);

CREATE TABLE review (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    valid BOOLEAN DEFAULT FALSE
);

CREATE TABLE schedule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(30) NOT NULL,
    opening_time TIME NOT NULL,
    closing_time TIME NOT NULL
);

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'veterinarian', 'employee') NOT NULL
);

CREATE TABLE veterinary_report (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT,
    user_id INT,
    health_status TEXT,
    food VARCHAR(100),
    food_weight DECIMAL(5, 2),
    report_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    detail TEXT,
    FOREIGN KEY (animal_id) REFERENCES animal(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE animal_feeding (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT,
    user_id INT,
    feeding_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    food VARCHAR(100),
    quantity DECIMAL(5, 2),
    FOREIGN KEY (animal_id) REFERENCES animal(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);
