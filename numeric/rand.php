<?php 
include "../db.php";

$result=$conn->query("SELECT RAND() AS result");
echo $result->fetch_assoc()['result'];
?>