<?php 
$conn=mysqli_connect("localhost","root","","join");
$sql = 'SELECT * FROM `student` AS s
   INNER JOIN
   `exam` AS e
   ON s.id = e.studentid
   INNER JOIN
   `result` AS r
   ON e.studentid = r.examid';
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num ;
echo "<br>";
echo "(Multilevel inner join) <br>";
echo "<br>";
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['name'].  " &nbsp;"  .$row['address']."  &nbsp;  ".$row['studentid']."    &nbsp ".$row['exam']."  &nbsp ".$row['examid']."  &nbsp;   ".$row['result'];
         echo "<br>"; 
         
    }
    
}