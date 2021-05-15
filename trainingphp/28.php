<html>  
<body>  
<form method="post">  
    Enter a number:  
    <input type="number" name="num">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php  
$num=407;  
$total=0;  
$i=$num;  
while($i!=0)  
{  
$rem=$i%10;  
$total=$total+$rem*$rem*$rem;  
$i=$i/10;  
}  
if($_POST){  
    $num = $_POST['num'];  
if($num==$total)  
{  
echo "Armstrong number";  
}  
else  
{  
echo "Not armstrong number";  
}  
}

?> 