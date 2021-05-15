<?php
$test = array(-10,20,40,-30,50,-60);
$temp = array();

function neg($x)
{
    if ($x <0) 
    {
        $temp[] = $x; 
        return $x;
    }
}
$negative = array_map("neg", $test);
?>asdfg