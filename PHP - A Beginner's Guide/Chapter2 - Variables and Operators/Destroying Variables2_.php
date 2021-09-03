<html>
<head>
    <title>Unset a variable</title>
</head>
<body>

<?php
// assign value to variable
$car = "Porsche";

// print variable value
// output: "Before unset(), my car is a Porsche"
echo "Before unset(), my car is a $car";

// assign empty value to variable.
$car = null;

echo "\n";

echo "<br/>";

// print variable value
// output: "After $car = null, my car is a "
echo "After \$car = null, my car is a $car";
?>
</body>
</html>
