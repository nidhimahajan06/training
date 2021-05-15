<?php
$array = array(-2, -1, 0, 1, 2, 3, 4);
function ($array) {
    $i = 0;
    foreach ($array as $x)
        if ($x < 0) $i++;
    return $i;
}
 count(array_filter($array, "negative"));
?>
