<html>

<title>Bonus calculator</title>

<body>



<?php

if (!isset($_POST["submit"])){

?>

<form method="post" action="Combining%20Conditional%20Statements.php">

    <label for="rating">Rating: </label><br>
    <input id="rating" type="text" name="$rating" />

    <label for="current_salary">Current salary: </label><br>
    <input id="current_salary" type="text" name="current_salary" />

    <input type="submit" name="submit" value="Submit" />

</form>


<?php

}




?>


</body>


</html>
