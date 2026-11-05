<?php

try {
     // Establish database connection
    $mysqli = new mysqli("192.168.0.198", "admin","123", "pumpkin");

    $sql = "INSERT INTO leaderboard(sessionID, playerID, stage1score, stage2score, TotalScore, Rank, playedAt, durationSec) 
            VALUES ('20261105_115300', 4, 18, 31, 49, 1, '2026-11-03 11:56:53', 465)";

    $mysqli->query($sql);

    echo "New player with ID: " . $mysqli->insert_id . " added.";

} catch (mysqli_sql_exception $e){
    echo "ERROR: ".$e->getMessage();
} finally {

    // Close connection if it was established
    if (isset($mysqli)){
        $mysqli->close();
    }

}

// Source: https://chatgpt.com/c/6aeaf2a6-d5bc-83e8-91e9-ecc0c5c45c53
