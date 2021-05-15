<?php

//  multiplication table 
$num = 12;
$range = 20;
echo "The input number is: ", $num, "<br>";
echo "The range number is: ", $range, "<br>";
echo " Multiplication Table";
for ($i = 1; $i <= $range; $i++) {
    echo "<br>";
    echo "  ", $num, " * ", $i, " = ", $num * $i, " <br>";
}
?>