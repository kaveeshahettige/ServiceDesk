<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sample"; 

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE sample";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Create users table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL,
phone_number VARCHAR(20) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Users table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Create services table
$sql = "CREATE TABLE Services (
service_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
service_name VARCHAR(50) NOT NULL,
service_description VARCHAR(255) NOT NULL,
service_price DECIMAL(10,2) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Services table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Create orders table
$sql = "CREATE TABLE Orders (
order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_id INT(6) UNSIGNED ,
service_id INT(6) UNSIGNED NOT NULL,
order_date DATE NOT NULL,
service_place VARCHAR(50) NOT NULL,
service_time VARCHAR(50) NOT NULL,
 FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE SET NULL,
FOREIGN KEY (service_id) REFERENCES Services(service_id) ON DELETE SET NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Orders table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Create payments table
$sql = "CREATE TABLE Payments (
payment_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
order_id INT(6) UNSIGNED NOT NULL,
payment_date DATE NOT NULL,
payment_amount DECIMAL(10,2) NOT NULL,
FOREIGN KEY (order_id) REFERENCES Orders(order_id) ON DELETE SET NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Payments table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

//creating a profile picture table
$sql = "CREATE TABLE PPictures (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    picture VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
    )";
    if ($conn->query($sql) === TRUE) {
        echo "PPictures table created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error . "\n";
    }


if ($conn->query($sql) === TRUE) {
    echo "Reviews table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

?>
// Close connection
