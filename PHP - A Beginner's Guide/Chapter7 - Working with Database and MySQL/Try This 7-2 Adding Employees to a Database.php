<?php

$mysql = new mysqli("localhost", "user", "pass");

if ($mysql->query("CREATE DATABASE IF NOT EXISTS employee"))
    echo "Database was created successfully.";
else
    echo "Database was not created successfully.";

