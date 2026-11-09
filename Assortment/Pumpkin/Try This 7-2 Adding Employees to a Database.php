<?php

try {

    // Establish connection to MySQL server.
    $mysqli = new mysqli('192.168.0.198', 'admin', '123');

    if ($mysqli->query('CREATE DATABASE IF NOT EXISTS employees') )
        echo "Database created successfully";
    else {
        echo "Database was not create successfully.";
    }

    $mysqli->select_db("employees");

    $sql = "CREATE TABLE IF NOT EXISTS employees(
    
    id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    designation VARCHAR(255) NOT NULL
)";

    $mysqli->close();

} catch (mysqli_sql_exception $exception){

    echo "Error: " . $exception->getMessage();

}