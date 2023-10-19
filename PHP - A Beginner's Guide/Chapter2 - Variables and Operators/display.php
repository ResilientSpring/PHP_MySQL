<html>

<head>
    <title>Project 2-2: An Interactive HTML Color Sampler</title>
</head>

<body>

<h2>Project 2-2: An Interactive HTML Color Sampler</h2>

<?php

// get input values

$r = $HTTP_GET_VARS['r'];
$g = $HTTP_GET_VARS['g'];
$b = $HTTP_GET_VARS['b'];

// generate RGB string from input
$rgb = $r.','.$g.','.$b;
?>

R:<?php echo $r; ?>

</body>

</html>


