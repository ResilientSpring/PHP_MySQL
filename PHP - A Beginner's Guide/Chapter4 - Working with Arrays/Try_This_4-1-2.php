<html>

<head>
    <title>
        Project 4-1-2: Grade Averaging
    </title>
</head>

<body>

<h2>Project 4-1-2: Grade Averaging</h2>

<?php

// define array of grades ranging between 1 and 100
$grades = array(
    25, 64, 23, 87, 56, 38, 78, 57, 98, 95, 81, 67, 75, 76, 74, 82, 36, 39, 54,
    43, 49, 65, 69, 69, 78, 17, 91
);

// get the number of grades
$count = count($grades);

// iterate over grades
$total = $top = $bottom = 0;

foreach ($grades as $g){
    $total += $g;

    if ($g <= 20)
        $bottom++;

    if ($g >= 80)
        $top++;
}

$avg = round($total / $count);

$students = sizeof($grades);

// print statistics
echo "The number of students: $students <br/>";
echo "Class average: $avg <br/>";
echo "The number of students whose grade is less than 20: $bottom <br/>";
echo "The number of students whose grade is greater than 80: $top <br/>";

?>

</body>

</html>