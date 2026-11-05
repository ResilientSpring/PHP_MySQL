<?php
try {

    $mysql = new mysqli("192.169.0.198", "admin", "123", "pumpkin");

    $mysql->query("UPDATE leaderboard SET Rank = 3, playerID = 4 WHERE stage1score = 16, stage2score = 37");

    echo $mysql->affected_rows . ' row(s) updated.';

} catch (mysqli_sql_exception $exception){

    echo "ERROR: " . $exception->getMessage();

} finally {

    if (isset($mysql)){
        $mysql->close();
    }

}