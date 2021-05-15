<?php
// find sum of n numbers
function findSum($n)
{
$sum = 0;
for ($x = 1; $x <= $n; $x++)
	$sum = $sum + $x;
return $sum;
}
$n = 5;
echo findSum($n);
?>
