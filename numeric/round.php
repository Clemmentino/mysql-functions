<?php 
include "../db.php";

$result=$conn->query("SELECT ROUND(number_value,1) AS result FROM demo_data");
while($row=$result->fetch_assoc()) 
    echo $row['result']."<br>";
?>