<?php include "../db.php";
$r=$conn->query("SELECT VERSION() AS result");
echo $r->fetch_assoc()['result'];
?>