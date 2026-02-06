<?php 
include "../db.php";

$result=$conn->query("SELECT ABS(number_value) AS result FROM demo_data");

while($row=$r->fetch_assoc()) 
    echo $row['result']."<br>";
?>