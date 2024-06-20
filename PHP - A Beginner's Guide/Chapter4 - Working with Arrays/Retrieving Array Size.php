<?php

// define array
// $data = {"apple"};

$data = ["Aspire", "local host", "orders", "database", "missing"];

for ($i = 0; $i < sizeof($data); $i++)
    echo $data[$i]."<br>";

$states = ["Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
           "Nebraska" => array("population" => "1,711,263", "capital" => "Omaha")];

echo $states["Ohio"]["population"];
