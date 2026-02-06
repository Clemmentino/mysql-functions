<?php include "../db.php";
$r=$conn->query("SELECT BIN(10) AS result");
echo $r->fetch_assoc()['result'];
?>