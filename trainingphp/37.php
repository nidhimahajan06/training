<html>  
<body>  
<!-- input and add -->
<form method="post">  
Number 1:  
<input type="number" name="number1" /><br><br>  
Number 2:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
echo "Sum of $number1 and $number2 is: ".$sum;   
}  
?>  
</body>  
</html>  