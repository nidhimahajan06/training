<html>
<body>
  <!-- leap year or not -->
<form method="post">
Year<input type="number" name="year" >
<button name="submit">Submit</button>
</form>
</body>
</html>
<?php
   if ($_POST){
         $year=$_POST['year'];
   if ($year % 400 == 0) {
    echo "$year is a leap year.";
   }
   else if ($year % 100 == 0) {
    echo "$year is not a leap year.";
   }
   else if ($year % 4 == 0) {
    echo "$year is a leap year.";
   }
   else {
      echo "$year is not a leap year.";
   }
}
?>