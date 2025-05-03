sql code for database backpackers_db

CREATE DATABASE backpackers_db;
USE backpackers_db;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    adults INT NOT NULL,
    children INT NOT NULL,
    guests INT NOT NULL,
    duration INT NOT NULL,
    package_name VARCHAR(255) NOT NULL, -- New column for selected package
    booking_id VARCHAR(50) NOT NULL UNIQUE,
    confirmation_number VARCHAR(50) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

sql code for database  tours_travels_db

-- Create the database
CREATE DATABASE tours_travels_db;

-- Use the newly created database
USE tours_travels_db;

-- Create the users table
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    country VARCHAR(50) NOT NULL,
    destination VARCHAR(100),
    travel_interest VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


