<?php 
include "../db.php";

$result=$conn->query("SELECT TRUNCATE(number_value,1) AS result FROM demo_data");
while($row=$result->fetch_assoc()) 
    echo $row['result']."<br>";
?>