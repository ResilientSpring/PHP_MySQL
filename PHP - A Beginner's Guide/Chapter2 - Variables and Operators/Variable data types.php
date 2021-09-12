<html>
<head>
    <title>Variable data types</title>
</head>
<body>

<?php
// define string variable
$whoami = 'Sarah';

// output: 'string'
echo gettype($whoami);

echo "\n";

// assign new integer value to variable
$whoami = 99.8;

// output: 'double'
echo gettype($whoami);

echo "\n";

// empty variable
$whoami = null;

// output" 'NULL'
echo gettype($whoami);
?>
</body>
</html>