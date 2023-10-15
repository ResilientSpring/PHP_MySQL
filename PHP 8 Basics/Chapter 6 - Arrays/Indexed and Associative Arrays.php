<?php

$array1 = array("foo" => "bar", "bar" => "foo");

for ($i = 0; $i < 2; $i++)
    echo $array1[$i]." ";


// Using the short array syntax
$array2 = ["foo2" => "bar2", "bar2" => "foo2"];

foreach ($array2 as $value)
    echo $value." ";
