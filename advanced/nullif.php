<?php include "../db.php";
$r=$conn->query("SELECT NULLIF(5,5) AS result");
var_dump($r->fetch_assoc()['result']);
?>