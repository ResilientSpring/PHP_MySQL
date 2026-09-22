<?php
// attempt database connection
$mysqli = new mysqli("localhost", "root", null, "music");

if($mysqli === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

// attempt query execution
// iterate over result set
// print each record and its fields
// output: "1:Aerosmith \n 2:Abba \n ..."
$sql = "SELECT artist_id, artist_name, FROM artists";
if ($result = $mysqli.query($sql)){

}