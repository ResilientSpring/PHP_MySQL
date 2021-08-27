Thank you for the purchase! <br/><br/>

<?php
// This code creates three new variables-$tire_quantity, $oil_quantity, $spark_quantity- and set them
// to contain the data sent via the POST method from the form.
$tire_quantity = $_POST["tireqty"];
$oil_quantity = $_POST["oilqty"];
$spark_quantity = $_POST["sparkqty"];

echo "Order processed at ".date("Y-m-d H:i:s");

echo "<p>Your order is as follows: </p>";
echo $tire_quantity." tires.<br/>";
echo $oil_quantity." bottles of oil.<br/>";
echo $spark_quantity." spark plugs.<br/>";

?>

