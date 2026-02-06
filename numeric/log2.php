<?php include "../db.php";

$result=$conn->query("SELECT LOG2(8) AS result");
echo $result->fetch_assoc()['result'];
?>