<?php
$mysqli = new mysqli("192.168.0.198", "admin", "123", "pumpkin");

if ($mysqli === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql = "SELECT playerID, stage1score, TotalScore, playedAt FROM leaderboard";

if ($result = $mysqli->query($sql)){



}
