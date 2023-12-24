<?php

$str = 'Welcome to nowhere';

echo substr($str, 3, 4);



echo "<br>";



echo substr($str, 3, 5).substr($str, -4, 4);



echo "<br>";


echo substr($str, 3, 4).substr($str, 7, 1).substr($str, -4, 4);
