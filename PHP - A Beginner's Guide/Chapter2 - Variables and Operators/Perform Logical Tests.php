<?php
// define variables
$price = 100;
$size = 18;

// logical AND test
// returns true if both comparisons are true
// returns true here
echo ($price > 50 && $size < 25)."<br>";

// logical OR test
// returns true if any of the comparisons are true
echo ($price > 150 || $size < 25)."<br>";

// logical OR test
// returns true if any of the comparisons are true
// returns false here
echo ($price > 150 || $size > 75)."<br>";

// logical NOT test
// reverses the logical test
// returns false here
echo !($size > 10)."<br>";

?>
