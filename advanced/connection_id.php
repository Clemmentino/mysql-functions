<?php include "../db.php";
$r=$conn->query("SELECT CONNECTION_ID() AS result");
echo $r->fetch_assoc()['result'];
?>