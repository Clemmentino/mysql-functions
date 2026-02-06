<?php include "../db.php";
$r=$conn->query("SELECT BINARY 'mysql' AS result");
echo $r->fetch_assoc()['result'];
?>