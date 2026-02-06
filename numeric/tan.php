<?php 
include "../db.php";

$result=$conn->query("SELECT TAN(1) AS result");
echo $result->fetch_assoc()['result'];
?>