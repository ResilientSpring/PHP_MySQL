<?php

$text_input_field = $_POST["text_input_field"];
$password_field = $_POST["password_field"];
$email = $_POST["text_area"];
$selection_list = $_POST["selection_list"];

echo "Hi, $text_input_field! Your selection is ".$selection_list.".<br>";

$season = $_POST["season"];

echo "Your favorite season is ".$season.".<br><br>";

$interest = $_POST["interest"];

print_r($interest);

echo "<br>Your interests include: <br>";

foreach ($interest as $value)
    echo $value."<br>";
