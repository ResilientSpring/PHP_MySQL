<html>

<head>
    <title>Project 3-2: Tent Assignment</title>
</head>

<body>

    <h2>Project 3-2: Tent Assignment</h2>

<?php

// if form not yet submitted, display form.

if (!isset($_POST["submit"])) {

?>

<form method="post" action="Try%20This%203-2%20Assigning%20Boy%20Scouts%20to%20Tents.php">

    Enter your age: <br>
    <input type="text" name="age" size="3" />

    <p></p>

    <input type="submit" name="submit" value="Submit" />

</form>

<?php

}


?>

</body>

</html>