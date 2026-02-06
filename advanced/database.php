<?php include "../db.php";
$r=$conn->query("SELECT DATABASE() AS result");
echo $r->fetch_assoc()['result'];
?>