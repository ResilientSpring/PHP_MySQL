<html>

<head>
    <title>
        Result
    </title>
</head>

<body>

<h2>Success!</h2>

<?php

/* Whenever a form is submitted to a PHP script through the POST method,
   the form's input variables and their values automatically become available
 * to the PHP script through a special container variable named $_POST.
 *
 * Accessing the value entered into a particular form field then becomes as
 * simple as referencing $_POST with the field's name.
 *
 * */
$type = $_POST["selType"];
$color = $_POST["txtColor"];

// use form input
echo "Your $color $type is ready. Safe driving!";

?>

</body>
</html>

