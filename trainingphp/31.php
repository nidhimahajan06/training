<html>
<body>
<form method="post">
Enter of your choice<input type="text" name="num" >
<button name="submit">Submit</button>
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
$num=$_POST['num'];
$num1 = 0;
$num2 = 1;
echo "Fibonacci Series \n";
echo $num1.' '.$num2.' ';
for($i = 2; $i < $num; $i++){
$num3= $num1 + $num2;
echo $num3.' ';
$num1 = $num2;
$num2 = $num3;
}
}
?>