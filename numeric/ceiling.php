<?php 
include "../db.php";

$result=$conn->query("SELECT CEILING(number_value) AS result FROM demo_data");
while($row=$result->fetch_assoc()) echo $row['result']."<br>";
?>