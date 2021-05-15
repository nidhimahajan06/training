<b>swapping using third variable</b><br>
<?php
$a = 50;  
$b = 100;  
$t = $a;   // t is third variable
$a = $b;  
$b = $t;  
echo "After swapping:<br>";  
echo "a =".$a."  b=".$b;  
?>  