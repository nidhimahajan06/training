<b>Write a PHP program to check whether year is leap year or not using conditional operator </b><br>
<html>  
<body>  
<form method="post">  
    Enter a number:  
    <input type="number" name="year">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php
if($_POST){  
    $year = $_POST['year'];
$leap=($year % 400 == 0)? true: ($year% 4 == 0)? ($year% 100 != 0): false ? true : false;
if ($leap)
{
	echo" $year is leap year";
}
else
{
	echo " $year is not leap year";
}
}
?>