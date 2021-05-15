<?php
//largest among three numbers
      $n1=10;
      $n2=40;
      $n3=20;
      if($n1>$n2 && $n1>$n3){
        echo "greatest number is" . "$n1";
      }
      else{
        if($n2>$n1 && $n2>$n3){
          echo "greatest number is "." $n2";
        }
        else
          echo "greatest number is "." $n3";
      }
?>