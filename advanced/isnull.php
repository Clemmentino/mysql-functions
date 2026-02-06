<?php include "../db.php";
$r=$conn->query("SELECT ISNULL(NULL) AS result");
echo $r->fetch_assoc()['result'];
?>