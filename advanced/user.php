<?php include "../db.php";
$r=$conn->query("SELECT USER() AS result");
echo $r->fetch_assoc()['result'];
?>