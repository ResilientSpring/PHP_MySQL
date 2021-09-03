<html>
<head>
    <title>
        Assign a variable the value of another variable, or the result of a calculation
    </title>
</head>
<body>

<?php
// assign value to variable
$now = 2008;

// assign variable to another variable
$current_year = $now;

// perform calculation
$lastYear = $current_year - 1;

// output: "2007 has ended. Welcome to 2008!"
echo "$lastYear has ended. Welcome to $current_year!";
?>

</body>
</html>