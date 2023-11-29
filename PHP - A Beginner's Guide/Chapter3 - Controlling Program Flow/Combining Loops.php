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
    echo "<tr>";

    for ($col = 1; $col < 5; $col++)
        echo "<td>Row $row, Column $col </td>";

    echo "</tr>";

}

echo "</table>";

?>

</body>
</html>