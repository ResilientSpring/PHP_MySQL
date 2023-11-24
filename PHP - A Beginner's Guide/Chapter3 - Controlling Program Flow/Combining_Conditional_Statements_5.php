<html>

<header>
    <title>Combining Conditional Statements</title>
</header>

<body>

<?php

if (!isset($_POST["submit"])) {

    echo "

    <h3>Let's see if your entered year is a leap year.</h3>

    <form method="post" action="Combining_Conditional_Statements_4.php">

        <label for="year">Year: </label><br>
        <input type="text" name="year" id="year" size="15"/>

        <input type="submit" name="submit" value="Submit!"/>
        <input type="reset" name="reset" value="Reset" />

    </form>

";

} else{

    $year = $_POST["year"];

    if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 ==0)))
        echo "$year is a leap year.";
    else
        echo "$year is not a leap year.";

}

?>

</body>


</html>

