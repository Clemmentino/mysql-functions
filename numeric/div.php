<?php 
include "../db.php";

$result=$conn->query("SELECT 10 DIV 3 AS result");
echo $result->fetch_assoc()['result'];
?>