<?php
// find evem odd
   $array = array(0,2,3,6,7,9,10,30,60);
   $total = count($array);
   echo "Even numbers";
   echo "<br>";
             foreach($array as $arr)
             {
              if(($arr%2) == 0 ){
              echo "$arr";
              echo "<br>";
              }
             }
 echo "<br>";
 echo "Odd numbers";
 echo "<br>";
           foreach($array as $arr)
           {
           if(($arr%2) != 0 ){
             echo "$arr";
             echo "<br>";
          }
         }
   
  ?>