<?php

$names = ['Harry', 'Ron', 'Hermione'];

$status = ['name' => 'James Potter', 'status' => 'dead'];

# You can change the content of an array either by treating it as a map or as a list.

# Treating it as a list means appending another element to the end of the array.
$names[] = 'Neville';

# Treating it as a map means that you specify the key that you want to override.
$status['age'] = 32;

print_r($names, $status);

