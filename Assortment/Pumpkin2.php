<?php
// attempt database connection
$mysqli = new mysqli("192.168.0.198", "admin", "123", "pumpkin", 3306);

if($mysqli === false){

    die("ERROR: Could not connect.". mysqli_connect_error());

}

// attempt query execution
// add a new record
// output: "New artist with id:7 added."
$sql = "INSERT INTO leaderboard(sessionID, playerID, stage1score, stage2score, TotalScore, Rank, playedAt, durationSec) VALUES ('20260924_141353', 2, 10, 35, 45, 1, '2026-09-24 14:12:53', 465)";

if($mysqli->query($sql) === true){
    echo 'added.';
} else {
    echo "ERROR: Could not execute query: $sql. ".$mysqli->error;
}

// close connection
$mysqli->close();
?>