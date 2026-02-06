<?php 
include "../db.php";

$result=$conn->query("SELECT SUM(number_value) AS result FROM demo_data");
echo $result->fetch_assoc()['result'];
?>