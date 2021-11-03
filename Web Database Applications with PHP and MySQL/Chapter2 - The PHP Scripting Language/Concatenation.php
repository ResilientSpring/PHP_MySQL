<?php

// Use the dot-operator (.) to concatenate two or more strings:
$var = "test string";

$var = "test"."string";

$var = "test";

$var = $var." string";

// Here ia s shortcut to add a string to the end of another.
$var .= " test";

echo $var;

print "<br/>";

// The following are all equivalent.
echo "test string";
print "\n";
echo "test" . "string";
print "<br/>";
echo "test"."string";
print "<br>";
echo "test", "string";
