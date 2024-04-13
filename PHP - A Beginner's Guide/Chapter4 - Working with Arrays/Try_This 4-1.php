<html>

<head>
    <title>
        Project 4-1: Grade Averaging
    </title>
</head>

<body>

<h2>Project 4-1: Grade Averaging</h2>

<?php

// define array of grades ranging between 1 and 100
$grades = array(
    25, 64, 23, 87, 56, 38, 78, 57, 98, 95, 81, 67, 75, 76, 74, 82, 36, 39, 54,
    43, 49, 65, 69, 69, 78, 17, 91
);

// get number of grades
$count = count($grades);


$total = $top = $bottom = 0;

// iterate over grades
foreach ($grades as $g){
    $total += $g;

    // calculate total and the number of the grades greater than or equal to 80
    // and smaller than or equal to 20.
    if ($g <= 20)
        $bottom++;

    if ($g >= 80)
        $top++;
}

$avg = round($total / $count);

// print statistics
echo "Class average: $avg <br/>";
echo "Number of students in bottom 20%: $bottom <br/>";
echo "Number of students in top 20%: $top <br/>";

?>

</body>

</html>