<?php 
include "../db.php";

$result=$conn->query("SELECT ACOS(0.5) AS result");
echo $r->fetch_assoc()['result'];
?>