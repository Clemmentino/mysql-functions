<?php 
include "../db.php";

$result=$conn->query("SELECT PI() AS result");
echo $result->fetch_assoc()['result'];
?>