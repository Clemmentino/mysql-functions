<?php 
include "../db.php";

$result=$conn->query("SELECT POWER(2,3) AS result");
echo $result->fetch_assoc()['result'];
?>