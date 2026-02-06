<?php 
include "../db.php";

$result=$conn->query("SELECT LOG10(100) AS result");
echo $result->fetch_assoc()['result'];
?>