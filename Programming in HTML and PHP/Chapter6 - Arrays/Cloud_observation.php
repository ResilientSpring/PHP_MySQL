<?php

// high clouds
if (isset($_POST ["high"])) {
    $high = $_POST ["high"];
    $n = count($high);
    echo "For high clouds, you observed <br />";
    for ($i = 0; $i < $n; $i++) {
        echo $high [$i] . "<br>";
    }
} else {
    echo "You didn't observe any high clouds.<br />";
}

// mid clouds
if (isset($_POST ["mid"])) {
    $mid = $_POST ["mid"];
    $n = count($mid);
    echo "<br>For mid-clouds, you observed<br />";
    for ($i = 0; $i < $n; $i++) {
        echo $mid [$i] . "<br />";
    }
} else {
    echo "<br>You didn't observe any mid clouds.<br />";
}

// low clouds
if (isset($_POST ["low"])) {
    $low = $_POST ["low"];
    $n = count($low);
    echo "<br>For low clouds, you observed<br />";
    for ($i = 0; $i < $n; $i++) {
        echo $low [$i] . "<br />";
    }
} else {
    echo "<br>You didn't observe any low clouds.<br />";
}
// rain clouds
if (isset($_POST ["rain"])) {
    $rain = $_POST ["rain"];
    $n = count($rain);
    echo "<br>For rain clouds, you observed<br />";
    for ($i = 0; $i < $n; $i++) {
        echo $rain [$i] . "<br />";
    }
} else {
    echo "<br>You didn't observe any rain clouds.<br />";
}
?>
