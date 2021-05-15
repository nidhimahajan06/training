<b>Write a PHP program to find maximum between three numbers using conditional operator</b><br>
<?php
$x=16;
$y=05;
$z=11;
$max = $x > $y ? ( $x > $z ? $x : $z) : ($y > $z ? $y : $z) ;
echo "Max between " .$x. " and " .$y . " and ".$z." is " . $max;
?>