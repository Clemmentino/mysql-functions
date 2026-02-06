<?php
include "../db.php";
$result = $conn->query("SELECT CURRENT_TIME() AS result");
$row = $result->fetch_assoc();
?>
<h2>CURRENT_TIME Output</h2>
<p><?= $row['result'] ?></p>
