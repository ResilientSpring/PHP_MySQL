Thank you for your purchase! <br/><br/>

<?php

$tire_quantity = $_POST["tireqty"];
$oil_quantity = $_POST["oilqty"];
$spark_quantity = $_POST["sparkqty"];

echo "<p>Your order is processed at ".date("Y-m-d H:i:s")."</p>";

echo "Your order content is as follows: <br/>";
echo htmlspecialchars($tire_quantity)." tires.<br/>"
    .htmlspecialchars($oil_quantity)." bottles of oil.<br/>"
    .htmlspecialchars($spark_quantity)." spark plugs.";

?>
