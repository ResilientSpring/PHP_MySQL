<html>
<head>
    <title>
        Runtime variable
    </title>
</head>
<body>

<?php

// set a variable
$attribute = 'price';

// create a new variable
// its name comes dynamically from the value of $attribute
$$attribute = 678;

// output: 678
echo $price;  // It will not result in error at runtime.

?>
</body>
</html>
