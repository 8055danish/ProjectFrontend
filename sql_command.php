<?php

//Create Database
$sql = "CREATE DATABASE db;
if ($conn->query($sql) === TRUE) {
  echo "MyGuest Table is created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Create table product
$sql = "CREATE TABLE products(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) NOT NULL,
price VARCHAR(20) NOT NULL,
image VARCHAR(50),
description VARCHAR(255)
)";


// Create table categories
$sql = "CREATE TABLE products(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(50) NOT NULL)";

// Create table tags
$sql = "CREATE TABLE products(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tag VARCHAR(100) NOT NULL,
lastname VARCHAR(20) NOT NULL,)";

//Create order table
$sql = "CREATE TABLE orders(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
product_name VARCHAR(100) NOT NULL,
product_price VARCHAR(50) NOT NULL,
poduct_quantity VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

?>
