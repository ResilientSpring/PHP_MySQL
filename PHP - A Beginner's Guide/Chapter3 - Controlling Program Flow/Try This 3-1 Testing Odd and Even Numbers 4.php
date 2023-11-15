<html>

<head>
    <title>Project 3-1: Odd/Even Number Tester</title>
</head>

<body>

<h2>Project 3-1: Odd/Even Number Tester</h2>

<?php

// if form not yet submitted, display form
if (!isset($_POST['submit'])) {
    // isset() checks if a variable is not null.[1]
    ?>

    <form method="post" action="Try%20This%203-1%20Testing%20Odd%20and%20Even%20Numbers.php">

        <label for="hi">Enter value: <br></label>

        <input type="text" name="num" size="3" id="hi" />

        <p></p>

        <input type="submit" name="submit" value="Submit" />

    </form>

    <?php

// if form submitted, process form input

} else {

    // retrieve number from POST submission
    $num = $_POST['num'];

    // test value for even-ness
    // display appropriate message
    if (($num % 2) == 0)
        echo 'You entered '.$num.', which is an even number.';
    else
        echo 'You entered'.$num.', which is an odd number';

}
?>

</body>
</html>

<!--

References:

1. https://www.w3schools.com/php/php_ref_keywords.asp

-->