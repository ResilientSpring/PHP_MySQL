<?php

/* Variable substitution provides a convenient way to embed data held in a variable directly into
string literals.

PHP examines, or parses, double-quoted strings and replaces variable names with the variable's value.
 * */

$number = 45;
$vehicle = "bus";
$message = "This $vehicle holds $number people.<br>";

print $message;

// To include the dollar signs in a double-quoted string, you need escape the variable substitution
// meaning with the backslash sequence \$
$message2 = "This \$vehicle holds \$number people.";

print $message2;
