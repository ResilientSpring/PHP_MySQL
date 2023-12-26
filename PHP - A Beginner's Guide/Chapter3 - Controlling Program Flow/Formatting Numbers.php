<?php

$num = 1106482.5843;

// format number with defaults
echo number_format($num);

// format number with custom separators
echo number_format($num, 3, '*', '?');

