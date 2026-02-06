<?php 
include "../db.php";

$result=$conn->query("SELECT MAX(number_value) AS result FROM demo_data");
echo $result->fetch_assoc()['result'];
?>