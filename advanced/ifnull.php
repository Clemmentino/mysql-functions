<?php include "../db.php";
$r=$conn->query("SELECT IFNULL(NULL, 'Default Value') AS result");
echo $r->fetch_assoc()['result'];
?>