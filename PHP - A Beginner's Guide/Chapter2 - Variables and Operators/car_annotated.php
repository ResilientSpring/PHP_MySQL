<html>

<head><title></title></head>

<body>

<h2>Success!</h2>

<?php

/* Whenever a form is submitted to a PHP script through the POST method,
   the form's input variables and their values automatically become available
 * to
 * */
$type = $_POST["selType"];
$color = $_POST["txtColor"];

// use form input
echo "Your $color $type is ready. Safe driving!";

?>

</body>
</html>

