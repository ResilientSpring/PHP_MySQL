<?php
try {
    $mysql = new mysqli("192.169.0.198", "admin", "123", "pumpkin");
} catch (mysqli_sql_exception $exception){

}