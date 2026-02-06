<?php 
include "../db.php";

$result=$conn->query("SELECT RADIANS(180) AS result");
echo $result->fetch_assoc()['result'];
?>