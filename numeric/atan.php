<?php 
include "../db.php";

$result=$conn->query("SELECT ATAN(1) AS result");
echo $result->fetch_assoc()['result'];
?>