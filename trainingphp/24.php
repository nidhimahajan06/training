<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
<form method="post">        
Enter a Number: <input type="text" name="num"><br>  
<button type="submit">Check</button>  
</form>
</body>
</html>
  
<?php   
    if($_POST)  
    {  
        $num = $_POST['num'];  
        $rev = strrev($num);  
        if($num == $rev){  
            echo "The number $num is Palindrome";     
        }else{  
            echo "The number $num is not a Palindrome";   
        }  
}     
      ?>  