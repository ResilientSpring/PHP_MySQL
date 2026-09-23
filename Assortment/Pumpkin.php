<?php
// attempt database connection
$mysqli = new mysqli("127.0.0.1", "root", null, "pumpkin");

if($mysqli === false){

    die("ERROR: Could not connect.". mysqli_connect_error());

}


