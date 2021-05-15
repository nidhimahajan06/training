<b>Program to copy all elements from an array to another array</b><br>
<?php 
$arr1 = array(9,1,8,4,6);   
$arr2 = array();      
for ($i = 0; $i < count($arr1); $i++)
{   
	$arr2[$i] = $arr1[$i];   
}    
echo("Elements of array: <br>");  
for ($i = 0; $i < count($arr1); $i++) {   
	echo("$arr1[$i]" . " ");  
}   
echo "<br>"; 
echo("Elements of new array: <br>");  
for ($i = 0; $i < count($arr2); $i++) {   
	echo($arr2[$i] . " ");  
}   
?>  