<?php

$meats = array("fish", "chicken", "ham", "lamb");

$meats[2] = "turkey";

for ($i = 0; $i < count($meats); $i++)
    echo $meats[$i]."<br>";
