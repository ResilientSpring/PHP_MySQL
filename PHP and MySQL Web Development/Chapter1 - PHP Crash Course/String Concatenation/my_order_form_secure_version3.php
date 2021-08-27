Thank you for your purchase! <br/><br/>

<?php

$tire_quantity = $_POST["tireqty"];
$oil_quantity = $_POST["oilqty"];
$spark_quantity = $_POST["sparkqty"];

// Covert what user input to html entities.
$tire_quantity = htmlspecialchars($tire_quantity);
$oil_quantity = htmlspecialchars($oil_quantity);
$spark_quantity = htmlspecialchars($spark_quantity);

echo "<p>Your purchase is processed at ".date("Y-m-d H:i:s")."</p>";

echo "Your purchase content is as follows: <br/>";
echo $tire_quantity." tires.<br/>"
    ."$oil_quantity bottles of oil.<br/>"
    .htmlspecialchars($spark_quantity). " spark plugs.";

?>

