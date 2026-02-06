<?php 
include "../db.php";

$result=$conn->query("SELECT MIN(number_value) AS result FROM demo_data");
echo $result->fetch_assoc()['result'];
?>