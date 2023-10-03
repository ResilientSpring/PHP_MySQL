<?php
// define variables
$count = 7;
$age = 60;
$greeting = "We";

// subtract 2 and re-assign new value to variable equivalent to $count = $count -2
// output: 5
$count -= 2;
echo $count."<br>";

// divide by 5 and re-assign new value to variable equivalent to $age = $age / 5
// output: 12
$age /= 5;
echo $age."<br>";


// add new string and re-assign new value to variable equivalent to
// $greeting = $greeting."I come!"
// output: "Welcome!"
$greeting .= "lcome!";

echo $greeting;

?>
