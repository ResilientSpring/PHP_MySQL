<html>

<head>
    <title>Project 3-4: Member Registration</title>
</head>

<body>

<h2>Project 3-4: Member Registration</h2>

<?php

$name = $_POST["name"];
$address = $_POST["address"];
$age = $_POST["age"];
$profession = $_POST["profession"];
$resident = $_POST["resident"];

// validate submitted data
if (empty($name))
    die("ERROR: Please provide your name.");

?>


</body>

</html>
