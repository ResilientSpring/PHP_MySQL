<?php

// define array
$cars = arrary('Ferrari', 'Porsche', 'Jaguar', 'Lamborghini', 'Mercedes');

$cars2[0] = 'Ferrari';
$cars2[1] = 'Porsche';
$cars2[2] = 'Jaguar';
$cars2[3] = 'Lamborghini';
$cars2[4] = 'Mercedes';

$cars3[] = 'Ferrari';
$cars3[] = 'Lamborghini';

$data = array('username' => 'John', 'password' => 'secret', 'host' => '192.168.0.1');

$data2['username'] = 'John';
$data2['password'] = 'secret';
$data2['host'] = '192.168.0.1';

echo "The password is ". $data2['password'];
