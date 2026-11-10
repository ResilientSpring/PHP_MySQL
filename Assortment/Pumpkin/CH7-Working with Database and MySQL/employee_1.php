<?php

// if form submitted
// process form input
if (isset($_POST['submit'])) {

    // attempt connection to MySQL database
    $mysqli = new mysqli("192.168.0.198", "admin", "123", "employees");

    if ($mysqli === false)
        die("ERROR: Could not connect to database.". mysqli_connect_error());

    // open message block
    echo '<div id="message">';

    // retrieve and check input values
    $inputERROR = false;

    if (empty($_POST['emp_name'])) {
        echo "ERROR: Please enter a valid employee name";
        $inputERROR = true;
    } else {
        $name = $mysqli->escape_string($_POST['emp_name']);
    }

    if ($inputERROR != true && empty($_POST['emp_desig'])) {
        echo 'ERROR: Please enter a valid employee designation';
        $inputERROR = true;
    } else {
        $designation = $mysqli->escape_string($_POST['emp_desig']);
    }

    // add values to database using Insert query
    if ($inputERROR != true) {

        $sql = "INSERT INTO employees (name, designation) VALUES ('$name', '$designation')";

        if ($mysqli->query($sql) === true) {
            echo 'New employee record added with ID: '.$mysqli->insert_id;
        } else {
            echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
        }
    }

    // close message block
    echo '</div>';

    // close connection
    $mysqli->close();
}

?>