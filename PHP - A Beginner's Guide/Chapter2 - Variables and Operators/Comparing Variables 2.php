<?php

echo "If the comparing result is false, then 0 will not show up in the browser.";

echo "<br>";

// define variables
$p = 10;
$q = 11;
$r = 11.3;
$s = 11;

// test if $q is greater than $p
// return true
echo ($q > $p)."<br>";

// test if $q is less than $p
// return false
echo ($q < $p)."<br>";

// test if $q is greater than or equal to $s
// return true
echo ($q >= $s)."<br>";

// test if $r is less than or equal to $s
// return false
echo ($r <= $s)."<br>";

// test if $q is equal to $s
// return true
echo ($q == $s)."<br>";

// test if $q is equal to $r
// return false
echo ($q == $r)."<br>";

?>

