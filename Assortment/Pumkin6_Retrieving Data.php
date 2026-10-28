<?php
$mysqli = new mysqli("192.168.0.198", "admin", "123", "pumpkin");

if ($mysqli === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql = "SELECT playerID, stage1score, TotalScore, playedAt FROM leaderboard";

if ($result = $mysqli->query($sql)){

    if ($result->num_rows > 0){
        while($row = $result -> fetch_array()){
            echo $row[0].":".$row[1]."\n";
        }
        $result->close();
    }else{
        echo "ERROR: Could not execute $sql.".$mysqli->error;
    }

}

$mysqli->close();
