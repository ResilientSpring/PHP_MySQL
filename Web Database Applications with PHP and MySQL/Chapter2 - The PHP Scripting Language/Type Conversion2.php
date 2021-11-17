<?php

$var = "abc";

// Cast to float
$float = (float) $var;
print $float;
echo "<br>";

$float = floatval($var);
print $float;
echo "<br>";

// cast to a string
$string = (string) $var;
print $string;
echo "<br>";

$string = strval($var);

// cast to an object.
$object = (object) $var;
print $var;
echo "<br>";
