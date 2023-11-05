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

    <?php echo $amount_to_be_converted." ".$original_money   ?> equal

</p>

</html>
