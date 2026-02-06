<?php include "../db.php";
$r=$conn->query("SELECT SYSTEM_USER() AS result");
echo $r->fetch_assoc()['result'];
?>