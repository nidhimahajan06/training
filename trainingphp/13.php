<?php
// count no. of digits in a number
function countD($n)
{
	$count = 0;
	while ($n != 0)
	{
		$n = round($n / 10);
		++$count;
	}
	return $count;
}
$n = 189899;
echo "Number of digits : ". countD($n);
?>
