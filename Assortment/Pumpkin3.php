<?php
// Query cmd for ipconfig
// Remember this computer's IP address. Let's say, 192.168.0.107
// On another computer's PHP myAdmin, set up an account whose host name is 192.168.0.107
$mysqli = new mysqli("192.168.0.198", "admin2", "123", "pumpkin", 3306);

if($mysqli === false){

    die("ERROR: Could not connect.". mysqli_connect_error());

}

// attempt query execution
// add a new record
// output: "New artist with id:7 added."
$sql = "INSERT INTO leaderboard(sessionID, playerID, stage1score, stage2score, TotalScore, Rank, playedAt, durationSec) VALUES ('20260929_141353', 3, 15, 30, 45, 1, '2026-09-29 14:13:53', 465)";

if($mysqli->query($sql) === true){
    echo 'added.';
} else {
    echo "ERROR: Could not execute query: $sql. ".$mysqli->error;
}

// close connection
$mysqli->close();
?>