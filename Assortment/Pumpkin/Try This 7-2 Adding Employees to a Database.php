<?php

try {

    // Establish connection to MySQL server.
    $mysqli = new mysqli('192.169.0.198', 'admin', '123');

    if ($mysqli->query('CREATE DATABASE employees') )
        echo "Database created successfully";

    $mysqli->close();

} catch (mysqli_sql_exception $exception){

    echo "Error: " . $exception->getMessage();

}