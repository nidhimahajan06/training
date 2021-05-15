<html>  
<body>  
<form method="post">  
    Enter a number:  
    <input type="text" name="string">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php
function Palindrome($string){
	if (strrev($string) == $string){
		return 1;
	}
	else{
		return 0;
	}
}
if($_POST){  
    $string = $_POST['string'];
if(Palindrome($string)){
	echo "Palindrome";
}
else {
echo "Not Palindrome";
}
}
?>
