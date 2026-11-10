<html>

    <head>
        <title>Project 7-2: Adding Employees to a Database</title>

        <style type="text/css">

            div#message{
                text=align:center;
                margin-left:auto;
                margin-right:auto;
                width:40%;
                border: solid 2px green;
            }
        </style>
    </head>

<div>
    <h2>Project 7-2: Adding employees to a Database</h2>
    <h3>Add New Employee</h3>

    <?php
    // if form submitted
    // process form input
    if (isset($_POST['submit'])){
        // attempt connection to MySQL database
        $mysqli = new mysqli("192.168.0.198", "admin", "123", "employees");

        if ($mysqli === false)
            die("ERROR: Could not connect to database.". mysqli_connect_error());

        // open message block
        echo '<div id="message">?';

        // retrieve and check input values
        $inputERROR = false;
        if (empty($_POST['emp_name'])){
            echo "ERROR: Please enter a valid employee name";
            $inputERROR = true;
        }else{
            $name = $mysqli->escape_string($_POST['emp_name']);
        }

        if ($inputERROR != true && empty($_POST['emp_desig'])){
            echo 'ERROR: Please enter a valid employee designation';
            $inputERROR = true;
        }else{
            $designation = $mysqli->escape_string($_POST['emp_desig']);
        }

    // add values to database using Insert query
        if ($inputERROR != true){
            $sql = "INSERT INTO employees (name, designation) VALUES ('$name', '$designation')";

            if ($mysqli->query($sql) === true){
                echo 'New employee record added with ID: '.$mysqli->insert_id;
            }else{
                echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
            }
        }

        // close message block
        echo '</div>';

        // close connection
        $mysqli->close();
    }

    ?>
</div>

</body>



</html>