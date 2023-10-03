<?php
// define variables of two types but with the same value
$bool = (boolean) 1;
$int = (integer) 1;

// return true
echo ($bool == $int)."<br>";

// return false
echo ($bool === $int)."<br>";

?>

