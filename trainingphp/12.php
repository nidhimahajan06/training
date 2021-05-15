<html>  
<body>  
<!-- check +ve -ve -->
<form method="post">  
    Enter a number:  
    <input type="number" name="n">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php   
    if($_POST){  
        $n = $_POST['n'];     
        if($n > 0){  
            echo "$n is POSITIVE number";  
        }else{  
            echo "$n is NEGATIVE number";  
        }  
    }  
?>  