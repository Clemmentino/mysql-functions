<?php
include "../db.php";
$result = $conn->query("SELECT SYSDATE() AS result");
$row = $result->fetch_assoc();
?>
<h2>SYSDATE Output</h2>
<p><?= $row['result'] ?></p>
