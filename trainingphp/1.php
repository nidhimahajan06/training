<b>Write a program to find percentage of three subjects in PHp</b><br>
<?php 
$physics = 94;
$chemistry = 90;
$maths = 84;
$total = $physics + $chemistry + $maths;
$percentage = ($total / 300.0) * 100;
echo "The Total marks   = " . $total . "/300 <br>";
echo "The Percentage    = " . $percentage . "%";
?>