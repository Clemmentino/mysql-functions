<?php include "../db.php";
$r=$conn->query("SELECT SESSION_USER() AS result");
echo $r->fetch_assoc()['result'];
?>