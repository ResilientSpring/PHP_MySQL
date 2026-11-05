<?php
// attempt database connection
$mysqli = new mysqli("localhost", "user", "pass", "music");

if($mysqli === false){
    die("ERROR: Could not connect.");
}

// attempt query execution
// add a new record
// output: "1 row(s) updated."
$sql = "UPDATE artists SET artist_name = 'Eminem', artist_country = 'US' WHERE artist_id = 7";
