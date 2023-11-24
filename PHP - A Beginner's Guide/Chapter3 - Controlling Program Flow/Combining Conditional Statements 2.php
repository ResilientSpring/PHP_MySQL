<html>
<head>

    <title>Bonus calculator</title>

</head>

<body>

<h3>Welcome to the bonus calculator!</h3>

<?php

if (!isset($_POST["submit"])) {

    ?>

    <p>Please fill the form beneath to proceed.</p>

    <form method="post" action="Combining%20Conditional%20Statements.php">

        <label for="rating_">Rating: </label><br>
        <input id="rating_" type="text" name="$rating"/>

        <p></p>

        <label for="current_salary_">Current salary: </label><br>
        <input id="current_salary_" type="text" name="current_salary"/>

        <input type="submit" name="submit" value="Submit"/>

    </form>


    <?php

} else {

    $current_salary = $_POST["current_salary"];
    $rating = $_POST["rating"];

    $bonus = 0;

    if ($rating >= 3) {

        if ($current_salary < 15000) {
            $bonus = 5000;
            echo "Bonus should be $bonus";
        }
    } else {

        if ($current_salary < 15000) {
            $bonus = 3000;
            echo "Bonus should be $bonus";
        }
    }

}

?>

</body>

</html>
