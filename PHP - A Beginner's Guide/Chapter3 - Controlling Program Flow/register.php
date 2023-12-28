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


if (empty($name))
    die("ERROR: Please provide your name.");


if (empty($address))
    die("ERROR: Please provide your address.");

if (empty($age))
    die("ERROR: Please provide your age.");
elseif ($age < 18 || $age > 60 )
    die("ERROR: Membership is only open to those between 18 and 60 years.");

if (empty($profession))
    die("ERROR: Please provide your profession.");

if (strcmp($resident, 'no') == 0)
    die("ERROR: Membership is only open to residents.");


$to = 'registration@some.domain.com';
$from = 'webmaster@some.domain.com';
$subject = 'Application for membership';
$body = "Name: $name\r\nAddress: $address\r\nAge: $age\r\nProfession: $profession\r\n";

if (mail($to, $subject, $body, "From: $from"))
    echo "Thank you for your application.";
else
    die("ERROR: Mail delivery error.");

?>


</body>

</html>
