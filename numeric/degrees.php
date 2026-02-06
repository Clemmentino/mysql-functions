<?php 
include "../db.php";

$result=$conn->query("SELECT DEGREES(PI()) AS result");
echo $result->fetch_assoc()['result'];
?>