<?php

$artists = $_POST["artists"];

echo "Your selection is as follows: <br/>";

for ($i = 0; $i < count($artists) ; $i++){

    echo "$artists[$i] <br/>";

}
