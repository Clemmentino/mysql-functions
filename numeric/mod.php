<?php 
include "../db.php";

$result=$conn->query("SELECT MOD(10,3) AS result");
echo $result->fetch_assoc()['result'];
?>