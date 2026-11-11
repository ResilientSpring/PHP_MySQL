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

<form action="Try%20This%207-2%20Adding%20Employees%20to%20a%20Database.php" method="post">
    Employee name: <br/>
    <input type="text" name="emp_name" size="40/">
    <p></p>
    Employee designation: <br/>
    <input type="text" name="emp_desig" size="40"/>
    <p></p>
    <input type="button" name="submit" value="Submit"/>
</form>

<?php

// if form submitted
// process form input
if (isset($_POST["submit"])){

    $mysqli = new mysqli("localhost", "root", null);

    if ($mysqli->connect_error){
        echo "ERROR: Cannot connect to the database.<br/>".mysqli_connect_error();
    }

    // open message block
    echo '<div id="message">';

}



if ($mysqli->query("CREATE DATABASE IF NOT EXISTS employee"))
    echo "Database was created successfully.";
else
    echo "Database was not created successfully.";

$mysqli->select_db("employee");


?>

</body>

</html>
