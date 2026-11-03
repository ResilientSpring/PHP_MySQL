<?php
$mysqli = new mysqli("192.168.0.198", "admin", "123", "pumpkin");

if ($mysqli === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql = "INSERT INTO leaderboard(playerID, stage1score, TotalScore, playedAt) VALUES (4, 18, 49, '2026-11-03 11:56:53')";

// echo "playerID | stage1score | TotalScore | played at \n";

if ($result = $mysqli->query($sql)){
    echo "New player with ID: ".$mysqli->insert_id." added.";
} else {
    echo "ERROR: Could not execute query: $sql. ".$mysqli->error;
}

$mysqli->close();
