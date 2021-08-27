Thank you for your purchase! <br/><br/>

<?php

$tire_quantity = $_POST["tireqty"];
$oil_quantity = $_POST["oilqty"];
$spark_quantity = $_POST["sparkqty"];

echo "<p>Order processed at ".date("Y-m-d H:i:s")."<br/></p>";

echo "Your order content is as follows: <br/>";

echo "$tire_quantity tires.<br/>"."$oil_quantity bottles of oil.<br/>"."$spark_quantity spark plugs.";

?>