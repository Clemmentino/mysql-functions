<?php 
include "../db.php";
$result=$conn->query("SELECT LOG(10) AS result");
echo $result->fetch_assoc()['result'];
?>