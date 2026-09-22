<?php
// attempt database connection
$mysqli = new mysqli("localhost", "root", null, "music");

if($mysqli === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
