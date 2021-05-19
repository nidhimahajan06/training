<?php 
$con=mysqli_connect("localhost","root","","region");
$sql = 'SELECT s.name AS state_name, COUNT(s.id) AS no_of_city FROM `state` s
INNER JOIN `city` ct ON (ct.state_id = s.id)
GROUP BY s.id ORDER BY no_of_city DESC';
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
//echo $num ;
//echo "<br>";
echo "(State names by the order of their city) <br>";
echo "<br>";
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['state_name']."      " . $row['no_of_city'];
         echo "<br>"; 
    }
}


$sql = 'SELECT s.name AS state_name, ct.name AS city_name FROM `state` s
INNER JOIN `city` ct ON (ct.state_id = s.id)
ORDER BY state_name ASC';
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
//echo $num ;
echo "<br>";
echo "(Alphabetical Order)<br>";
echo "<br>";
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['state_name']." = " . $row['city_name'];
         echo "<br>"; 
    }
}
?>
