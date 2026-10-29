<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "college_db"
);

if (!$conn) {
    die("Connection failed");
}
?>



<!-- CREATE DATABASE college_db;

USE college_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT
); -->