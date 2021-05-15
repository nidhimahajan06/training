<html>  
<body>  
<!-- check even or odd -->
<form method="post">  
    Enter a number:  
    <input type="number" name="num">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php   
    if($_POST){  
        $num = $_POST['num'];   
        if(($num % 2) == 0){  
            echo "$num is an Even number";  
        }else{  
            echo "$num is Odd number";  
        }  
    }  
?>  