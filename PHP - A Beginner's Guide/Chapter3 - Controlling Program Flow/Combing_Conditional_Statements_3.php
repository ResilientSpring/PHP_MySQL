<html>

<header>
    <title>Combining Conditional Statements</title>
</header>

<body>

<?php

if (!isset($_POST["submit"])) {

?>

    <h3>Let's see if your entered year is a leap year.</h3>

    <form method="post" action="Combing_Conditional_Statements_3.php">

        <label for="year">Year: </label><br>
        <input type="text" name="year" id="year" size="5"/>

    </form>

<?php

}

?>

</body>


</html>

