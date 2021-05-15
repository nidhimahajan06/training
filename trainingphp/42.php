<?php
//  find second largest no in array
$arr = array(0,20,30,40,10);
$large = $arr[0];
$large2;
for($i=1; $i<count($arr); $i++){
	if($arr[$i]>$large){
		$large2 = $large;
		$large = $arr[$i];
	}else if($large2<$arr[$i] && $large2 < $large){
		$large2 = $arr[$i];
	}
}
echo "Second largest = ". "$large2";
echo "<br>";
echo "Largest = ". "$large";
?>