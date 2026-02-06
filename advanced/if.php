<?php include "../db.php";
$r=$conn->query("SELECT IF(number_value > 500,'High','Low') AS result FROM demo_data");
while($row=$r->fetch_assoc()) echo $row['result']."<br>";
?>