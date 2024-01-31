<?php

// define array

$cars = array("Ferrari", "Porsche", "Jaguar", "Lamborghini", "Mercedes");

$cars_2 = ["Ferrari", "Porsche", "Jaguar", "Lamborghini", "Mercedes"];

$cars_3[10] = ["Ferrari", "Porsche", "Jaguar", "Lamborghini", "Mercedes", "TOYOTA"];

$cars_4[] = "Ferrari";
$cars_4[] = "Lamborghini";

for ($i = 0; $i < count($cars_4); $i++)
    echo $cars_4[$i];
