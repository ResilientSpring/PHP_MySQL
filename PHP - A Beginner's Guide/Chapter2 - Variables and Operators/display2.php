<html>

<head>
    <title>Project 2-2: An Interactive HTML Color Sampler</title>
</head>

<body>

<h2>Project 2-2: An Interactive HTML Color Sampler</h2>

<?php

// get input values

$r = $_GET['r'];
$g = $_GET['g'];
$b = $_GET['b'];

// generate RGB string from input
$rgb = $r.','.$g.','.$b;
?>

R:<?php echo $r; ?>
G:<?php echo $g; ?>
B:<?php echo $b; ?>

<p/>

<div style="width:150px; height:150px; background-color: rgb(<?php echo $rgb; ?>)"

</body>

</html>


