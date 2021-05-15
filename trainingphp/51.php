<?php

	$a = array(2,6,6,31,2,31,16,4,1,5,1);
	echo "Array : \n";
	print_r($a);
	$a = array_flip($a);
    echo"<br>";
    $a = array_flip($a);
	$a= array_values($a);
	echo "New array : ";
	print_r($a);
?>
