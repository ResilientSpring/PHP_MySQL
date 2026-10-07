<?php

// In order to begin communication with the MySQL database server, you first need to open a connection
// to the server. All communication between PHP and the database server takes place through this connection.
$mysqli = new mysqli("localhost", "user", "pass", "music");

if ($mysqli === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

// attempt query execution
// iterate over result set
// print each record and its fields
// output: "1: Aerosmith \n 2: Abba \n ..."
$sql = "SELECT artist_id, artist_name FROM artists";

if ($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        while ($row = $result->fetch_array()){
            echo $row[0].":".$row[1]."\n";
        }
        $result->close();
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not execute $sql.".$mysqli->error;
}

// close connection
$mysqli->close();

?>
