<b>Write a PHP program to check whether a number is even or odd using conditional operator</b><br>
<?php
$x = 2;
echo "Number = ", $x, "<br>";
$x = $x % 2 == 0 ? 1 : 0;
if ($x) {
    echo "The number is even number <br>";
} else {
    echo "The number is odd number <br>";
}
?>
