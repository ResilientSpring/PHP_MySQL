<?php

$html = "<div width='200'>This is a div</div>";

echo htmlentities($html);

$html2 = '<div width="200">This is a div</div>';

echo "<br><br>".htmlentities($html2);

$lines = "This is a bro
ken line";

echo "<br><br>".nl2br($lines);
