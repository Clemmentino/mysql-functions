<?php 
include "../db.php";

$result=$conn->query("SELECT COT(1) AS result");
echo $result->fetch_assoc()['result'];
?>