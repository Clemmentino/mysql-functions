<?php 
include "../db.php";

$result=$conn->query("SELECT ATAN2(1,2) AS result");
echo $result->fetch_assoc()['result'];
?>