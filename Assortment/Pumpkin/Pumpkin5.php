<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Attempt database connection
    $mysqli = new mysqli(
        "192.168.0.198",
        "admin",
        "123",
        "pumpkin",
        3306
    );

    // Attempt query execution
    $sql = "INSERT INTO leaderboard
            (sessionID, playerID, stage1score, stage2score,
             TotalScore, Rank, playedAt, durationSec)
            VALUES
            ('20261028_141353', 2, 16, 37, 44, 2,
             '2026-10-28 14:35:53', 465)";

    if ($mysqli->query($sql) === true) {
        echo "added.";
    }

    $mysqli->close();

} catch (mysqli_sql_exception $e) {
    echo "ERROR: " . $e->getMessage();
}

// Source: https://chatgpt.com/c/6ab24c80-df2c-83ee-9110-ce908de664f6

?>
