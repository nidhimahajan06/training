<html>  
<body>  
<form method="post">  
    Enter a number:  
    <input type="number" name="n">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php
// perfect number or not
function perfectNumber($n)
{
	$sum = 0;
	for ($i = 1; $i < $n; $i++)
	{
		if ($n % $i == 0)
		{
			$sum = $sum + $i;
		}	
	}
	return $sum == $n;
}
if($_POST){  
    $n = $_POST['n'];  
if (perfectNumber($n))
	echo "Perfect Number";
else
	echo "Not Perfect";
}
?>

