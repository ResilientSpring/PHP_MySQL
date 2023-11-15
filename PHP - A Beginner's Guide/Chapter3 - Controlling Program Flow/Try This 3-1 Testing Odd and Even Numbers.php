<html>

<head>
    <title>Project 3-1: Odd/Even Number Tester</title>
</head>

<body>

    <h2>Project 3-1: Odd/Even Number Tester</h2>

<?php

// if form not yet submitted, display form
if (isset($_POST['submit'])) {

?>

<form method="post" action="Try%20This%203-1%20Testing%20Odd%20and%20Even%20Numbers.php">

    Enter value: <br>

    <input type="text" name="num" size="3" />

    <p></p>

    <input type="submit" name="submit" value="Submit" />

</form>


</body>


</html>