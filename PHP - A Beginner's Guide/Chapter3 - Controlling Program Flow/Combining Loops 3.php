<html>

<head>
    <title></title>
</head>


<body>

<?php

// generate an HTML table
// 3 rows, 4 columns

echo "<table border=\"1\" >";

for ($row = 1; $row < 4; $row++) {
    echo "<tr>";   // <tr> is short for table row.

    // <td> stands for table data.[1]
    for ($col = 1; $col < 5; $col++)
        echo "<td>Row $row, Column $col </td>";

    echo "</tr>";

    // The end result is a table with three rows, each containing four cells.
}

echo "</table>";


?>

</body>
</html>

<!--

References:

1. https://www.w3schools.com/html/html_tables.asp

-->