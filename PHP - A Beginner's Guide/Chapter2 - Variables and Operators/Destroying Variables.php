<html>
<head>
    <title>
        Unset a variable
    </title>
</head>

<body>

To unset a variable, pass the variable to PHP's aptly named <code>unset()</code> function.
<br>

<?php
// assign value to variable
$car = "Porsche";

// print variable value
// output: "Before unset(), my car is a Porsche"
echo $car;

// Unset variable
unset($car);

// print variable value
// this will generate an "undefined variable" error
// output: "After unset(), my car is a "
echo "After unset(). my car is a $car";
?>
</body>
</html>
