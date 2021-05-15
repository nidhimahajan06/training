<!--find max and min array -->
<?php
   function maxvalue($array){
      $n = count($array);
      $max = $array[0];
      for ($i = 1; $i < $n; $i++)
         if ($max < $array[$i])
            $max = $array[$i];
      return $max;
   }
   $array = array(65, 80, 100, 50, 20, 0);
   echo "The maximum value of the array is ";
   echo(maxvalue($array));
echo "<br>";
    function minvalue($array){
      $n = count($array);
      $min = $array[0];
      for ($i = 1; $i < $n; $i++)
         if ($min > $array[$i])
            $min = $array[$i];
            return $min;
   }
   $array = array(90, 12, 6, 2, 16, 31);
   echo "The minimum value of the array is ";
   echo (minvalue($array));
?>