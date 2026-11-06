<?php
// define values to be inserted
$songs = array(
    array('Patience', 4, 3),
    array('Beautiful World', 4, 4),
    array('Shine', 4, 4),
    array('Hold on', 4, 3),
);

try {
    // attempt database connection
    $mysqli = new mysqli("localhost", "user", "pass", "music");
}catch (mysqli_sql_exception $exception){
    echo "Could not connect because " . $exception->getMessage() . ".";
}




