<?php 
include "../db.php";

$result=$conn->query("SELECT GREATEST(1,5,3) AS result");
echo $result->fetch_assoc()['result'];
?>