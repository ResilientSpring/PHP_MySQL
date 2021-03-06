<html>
<head>
    <title>
        Creating/declaring variables
    </title>
</head>
<body>
<p>Variables are "containers" for storing information.</p>

<h2>Creating/declaring PHP variables</h2>
<p>
    In PHP, variables starts with the <span style="background-color: darkgrey; color: red">$</span>
    sign, followed by the name of the variable.
</p>

<?php
$txt = "Hello World!";
$x = 5;
$y = 10.5;

// PHP variable names are case-sensitive.
$age = 25;
$Age = 24;

echo $txt;
echo "<br/>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $Age;
echo "<br/>";
echo $age;
?>

</body>
</html>