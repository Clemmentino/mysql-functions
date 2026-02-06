<?php
include "../db.php";
$result = $conn->query("SELECT LOCALTIME() AS result");
$row = $result->fetch_assoc();
?>
<h2>LOCALTIME Output</h2>
<p><?= $row['result'] ?></p>
