<?php 
include "../db.php";

$result=$conn->query("SELECT LN(2) AS result");
echo $result->fetch_assoc()['result'];
?>
