<html>

<head>
    <title>
        Project 2-1: USD/EUR Currency Conversion
    </title>
</head>

<body>

<h2>Project 2-1 USD/EUR Currency Conversion</h2>

<?php
// define exchange rate 1.00 USD = 0.70 EUR
define("EXCHANGE_RATE", 0.70);

// define number of dollars
$dollars = 150;

// perform conversion and print result
$euros = $dollars * EXCHANGE_RATE;

echo "$dollars USD is equivalent to: $euros EUR";
?>

</body>

</html>


