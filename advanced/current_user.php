<?php include "../db.php";
$r=$conn->query("SELECT CURRENT_USER() AS result");
echo $r->fetch_assoc()['result'];
?>