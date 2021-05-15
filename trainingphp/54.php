<b>Write a PHP program to put even and odd elements of array in two separate array</b><br>
<?php 
$input = array(1);  
function odd_val($input) 
{ 
    return ($input & 1); 
}  
function even_val($input) 
{ 
    return !($input & 1); 
} 
$odd = array_filter($input, "odd_val");  
$even = array_filter($input, "even-val"); 

$odd = array_values(array_filter($odd)); 
$even = array_values(array_filter($even)); 
  
echo "Odd array :"; 
print_r($odd); 
  
echo "Even array :"; 
print_r ($even); 
?> 