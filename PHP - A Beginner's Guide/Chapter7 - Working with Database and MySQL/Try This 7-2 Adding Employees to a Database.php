<html>

<head>
    <title>Project 7-2: Adding Employees to a Database</title>

    <style>

        div#message{
            text-align: center;
            margin-left: auto;
        }


    </style>
</head>

<?php

$mysql = new mysqli("localhost", "root", null);

if ($mysql->query("CREATE DATABASE IF NOT EXISTS employee"))
    echo "Database was created successfully.";
else
    echo "Database was not created successfully.";

$mysql->select_db("employee");


?>
</html>
