<?php 
include "../db.php";

$result=$conn->query("SELECT SIN(1) AS result");
echo $result->fetch_assoc()['result'];
?>