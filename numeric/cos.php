<?php 
include "../db.php";

$result=$conn->query("SELECT COS(0) AS result");
echo $result->fetch_assoc()['result'];
?>