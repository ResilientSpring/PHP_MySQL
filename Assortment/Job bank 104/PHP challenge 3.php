<html>

<head>
    <title>PHP challenge 3</title>
</head>

<body>

<h2>PHP challenge 3</h2>

<?php

$naming = $_POST["name"];

?>

Your input is

<?php

for ($i = 0; $i < count($naming); $i++){

    echo "$naming[$i]";
}

?>

</body>

</html>


