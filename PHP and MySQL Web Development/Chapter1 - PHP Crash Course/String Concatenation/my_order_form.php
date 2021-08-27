Thank you for your purchase! <br/><br/>

<?php

$tire_quantity = $_POST["tireqty"];
$oil_quantity = $_POST["oilqty"];
$spark_quantity = $_POST["sparkqty"];

echo "order processed at ".date("Y-m-d H:i:s")."<br/>";

echo "Your order is as follows: <br/>";
echo htmlspecialchars($tire_quantity). " tires.<br/>";
echo "$oil_quantity bottles of oil.<br/>";
echo "$spark_quantity spark plugs.<br/>";

?>