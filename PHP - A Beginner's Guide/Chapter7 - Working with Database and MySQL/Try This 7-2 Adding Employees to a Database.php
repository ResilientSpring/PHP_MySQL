<html>

<head>
    <title>Project 7-2: Adding Employees to a Database</title>

    <style>

        div#message{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            border: solid 2px green;
        }

    </style>
</head>

<body>

<h2>Project 7-2: Adding employees to a Database</h2>
<h3>Add New Employee</h3>

<?php

// if form submitted
// process form input



$mysql = new mysqli("localhost", "root", null);

if ($mysql->query("CREATE DATABASE IF NOT EXISTS employee"))
    echo "Database was created successfully.";
else
    echo "Database was not created successfully.";

$mysql->select_db("employee");


?>

</body>

</html>
