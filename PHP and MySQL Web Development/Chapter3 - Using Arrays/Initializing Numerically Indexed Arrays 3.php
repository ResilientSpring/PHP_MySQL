<?php

$products = array('Tires', 'Oil', 'Spark Plugs');

$products2 = ['Tires', 'Oil', 'Spark Plugs'];

$numbers = range(1, 10);

// echo $numbers;   Print the memory address of the array, but PHP is a script language.

for ($i = 0; $i < 3; $i++){
    echo $products[$i];
}

for ($i = 0; $i < 3; $i++){
    echo "<br>".$products2[$i]." ";
}

foreach ($products2 as $current)  // store each element in $current
    echo $current." ";

?>

