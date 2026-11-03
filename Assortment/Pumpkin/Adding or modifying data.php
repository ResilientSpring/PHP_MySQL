<?php
$mysqli = new mysqli("192.168.0.198", "admin", "123", "pumpkin");

if ($mysqli === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql = "INSERT INTO leaderboard(playerID, stage1score, TotalScore, playedAt) VALUES (4, 18, 49, '2026-11-03 11:56:53')";

// echo "playerID | stage1score | TotalScore | played at \n";

if ($result = $mysqli->query($sql)){

    if ($result->num_rows > 0){
        while($row = $result -> fetch_object()){
            echo "   ".$row->playerID."     |      ".$row->stage1score."     |     ".$row->TotalScore."    |  ".$row->playedAt."\n";
        }
        $result->close();
    }else{
        echo "ERROR: Could not execute $sql.".$mysqli->error;
    }

}

$mysqli->close();
