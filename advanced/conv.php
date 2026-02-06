<?php include "../db.php";
$r=$conn->query("SELECT CONV(15,10,2) AS result");
echo $r->fetch_assoc()['result'];
?>