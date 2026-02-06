<?php 
include "../db.php";

$result=$conn->query("SELECT SQRT(16) AS result");
echo $result->fetch_assoc()['result'];
?>