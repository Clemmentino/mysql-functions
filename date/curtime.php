<?php
include "../db.php";
$result = $conn->query("SELECT CURTIME() AS result");
$row = $result->fetch_assoc();
?>
<h2>CURTIME Output</h2>
<p><?= $row['result'] ?></p>
