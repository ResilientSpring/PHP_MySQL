<?php

// Check whether the form was submitted.
if (isset($_POST['submit'])) {

    // Attempt connection to MySQL database.
    $mysqli = new mysqli("192.168.0.198", "admin", "123", "employees");

    // Check connection.
    if ($mysqli->connect_error) {
        die("ERROR: Could not connect to database. "
            . $mysqli->connect_error);
    }

    // Retrieve and check input values.
    $inputERROR = false;

    if (empty($_POST['emp_name'])) {
        $message = "ERROR: Please enter a valid employee name.";
        $inputERROR = true;
    } else {
        $name = $mysqli->real_escape_string($_POST['emp_name']);
    }

    if (empty($_POST['emp_desig'])) {
        $message = "ERROR: Please enter a valid employee designation.";
        $inputERROR = true;
    } else {
        $designation = $mysqli->real_escape_string($_POST['emp_desig']);
    }

    // Add values to database using INSERT query.
    if ($inputERROR != true) {

        $sql = "INSERT INTO employees (name, designation)
                VALUES ('$name', '$designation')";

        if ($mysqli->query($sql) === true) {

            $message = 'New employee record added with ID: '
                . $mysqli->insert_id;

        } else {

            $message = "ERROR: Could not execute query: "
                . $mysqli->error;

        }
    }

    // Close connection.
    $mysqli->close();

} else {

    $message = "ERROR: No form submission detected.";

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Employee Registration Result</title>

    <style>
        div#message {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            border: solid 2px green;
        }
    </style>
</head>

<body>

<div id="message">
    <?php echo htmlspecialchars($message); ?>
</div>

<p>
    <a href="employee.html">Return to Employee Registration</a>
</p>

</body>
</html>