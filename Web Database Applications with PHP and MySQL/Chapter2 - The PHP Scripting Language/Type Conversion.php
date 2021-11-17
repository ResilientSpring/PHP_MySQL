<?php

$year = 2003;

// Sets $yearString to the string value "2003"
$yearString = strval($year);
print $yearString;
echo "<br>";

$var = "abc";

// Because the string "abc" doesn't look anything like an integer,
// the call to intval() sets $value to zero.
$value = intval($var);

echo $value;
print "<br>";

// sets $count to the integer value 2748
$count = 2748;
print $count;
echo "<br>";

// Integer value of "abc" as a hexadecimal number
$count = intval($var, 16);
print $count;
echo "<br>";
