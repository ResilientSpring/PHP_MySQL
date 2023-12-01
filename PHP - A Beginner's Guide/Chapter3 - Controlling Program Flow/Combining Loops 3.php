<html>

<head>
    <title></title>
</head>


<body>

<?php

// generate an HTML table
// 3 rows, 4 columns

echo "<table border=\"1\" >";

// The outer loop is responsible for generating the table rows, and it runs 3 times.
for ($row = 1; $row < 4; $row++) {
    echo "<tr>";   // <tr> is short for table row.

    // On each iteration of the outer loop, the inner loop is also triggered;
    // this loop is responsible for generating the cells within each row, and
    // it runs four times.
    for ($col = 1; $col < 5; $col++)
        echo "<td>Row $row, Column $col </td>";

    echo "</tr>";

    // The end result is a table with three rows, each containing four cells.
}

echo "</table>";


?>

</body>
</html>