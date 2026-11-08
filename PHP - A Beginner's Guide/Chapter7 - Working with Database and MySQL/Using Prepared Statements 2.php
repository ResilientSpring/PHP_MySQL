<?php
// define values to be inserted
$songs = array(
    array('Patience', 4, 3),
    array('Beautiful World', 4, 4),
    array('Shine', 4, 4),
    array('Hold on', 4, 3),
);

try {
    // attempt database connection
    $mysqli = new mysqli("localhost", "user", "pass", "music");

    // To use a prepared statement, it is necessary to first define the SQL query string that will be executed
    // multiple times. This query string typically contains one or more placeholders, denoted by question marks.
    $sql = "INSERT INTO songs(song_title, fk_song_artist, fk_song_rating) VALUES (?, ?, ?)";

    // The query string with its placeholders is then passed to the MySQLi object's prepare() method, which checks
    // the SQL for errors.
    if ($stmt = $mysqli->prepare($sql)){

        // Executing the prepared statement is now a matter of performing two actions, usually within a loop.
        foreach ($songs as $s){

            // Bind the values to the prepared statement.
            $stmt->bind_param('sii', $s[0], $s[1], $s[2]);


            if ($stmt->execute()){
                echo "New song with id: " . $mysqli->insert_id . " added.\n";
            }else{
                echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
            }


        }

    }

    if (isset($mysqli)){
        $mysqli->close();
    }

}catch (mysqli_sql_exception $exception){
    echo "Could not connect because " . $exception->getMessage() . ".";
}




