<b>Write a PHP program to merge two array to third array</b><br>
<?php 
$array1 = array('One','Two','Three');
$array2 = array('Four','Five','Six');
$array3 = array('Seven','Eight','Nine');
$merge = array_merge($array1,$array2,$array3);
print_r($merge);
?>
