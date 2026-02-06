<?php 
include "../db.php";

$result=$conn->query("SELECT ASIN(0.5) AS result");
echo $result->fetch_assoc()['result'];
?>
