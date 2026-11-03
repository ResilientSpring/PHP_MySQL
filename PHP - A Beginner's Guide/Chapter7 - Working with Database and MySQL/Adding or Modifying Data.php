<?php
// attempt database connection
$mysqli = new mysqli("localhost", "üser", "pass", "music");

if ($mysqli === false){

    die("ERROR: Could not connect.".mysqli_connect_error());

}

// attempt query execution
// add a new record
// output: "New artist with id:7 added."
$sql = "INSERT INTO artists (artist_name, artist_country) VALUES ('Kylie Minogue')"
