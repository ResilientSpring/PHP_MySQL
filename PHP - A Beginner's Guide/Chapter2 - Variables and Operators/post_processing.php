<html>

<title>Converted Result</title>


<h4>Here is the result of conversion</h4>

<?php

$original_money = $_POST['original_money'];
$exchange_rate = $_POST['exchange_rate'];
$amount_to_be_converted = $_POST['amount'];
$targeted_money = $_POST['target_money'];

?>

<p>

    <?php echo $amount_to_be_converted." of ".$original_money ?> equal
    <?php echo $amount_to_be_converted * $exchange_rate?> of
    <?php echo " ".$targeted_money?>s.

</p>

</html>
