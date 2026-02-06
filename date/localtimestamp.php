<?php
include "../db.php";
$result = $conn->query("SELECT LOCALTIMESTAMP() AS result");
$row = $result->fetch_assoc();
?>
<h2>LOCALTIMESTAMP Output</h2>
<p><?= $row['result'] ?></p>
