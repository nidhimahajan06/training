<?php 
// reverse of a number
$num = 16112005;  
$result = 0;  
while ($num > 1)  
{  
$r = $num % 10;  
$result= ($result * 10) + $r;  
$num = ($num / 10);   
}  
echo "Reverse number of 16112005 is  : $result";  
?>