<?php
include "../db.php";
$result = $conn->query("SELECT CURRENT_TIMESTAMP() AS result");
$row = $result->fetch_assoc();
?>
<h2>CURRENT_TIMESTAMP Output</h2>
<p><?= $row['result'] ?></p>
