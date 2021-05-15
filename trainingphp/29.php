<?php
//prime or not
function prime($n)
{
   if ($n == 1)
   return 0;
   for ($i = 2; $i <= $n/2; $i++)
   {
      if ($n % $i == 0)
      return 0;
   }
   return 1;
}
$n = 9;
$val = prime($n);
if ($val == 1)
   echo "$n is prime number";
else
   echo "$n is not a prime number"
?>