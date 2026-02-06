<?php 
include "../db.php";

$result=$conn->query("SELECT LEAST(1,5,3) AS result");
echo $result->fetch_assoc()['result'];
?>