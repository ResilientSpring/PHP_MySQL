<?php

$str = '';
echo (boolean) empty($str);

$str = null;
echo empty($str);

$str = '0';
echo empty($str);
