<html>

<head>
    <title></title>
</head>


<body>

<?php

// generate a HTML table
echo "<table border=\"1\" >";

for ($row = 1; $row < 4; $row++) {
    echo "<tr>";   // <tr> is short for table row.

    for ($col = 1; $col < 5; $col++)
        echo "<td>Row $row, Column $col </td>";// <td> stands for table data.[1]

    echo "</tr>";
}
// The end result is a table with three rows, each containing four cells.

echo "</table>";

?>

</body>
</html>

<!--

References:

1. https://www.w3schools.com/html/html_tables.asp

-->