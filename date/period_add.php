<?php
include "../db.php";
$result = $conn->query("SELECT PERIOD_ADD(202401,5) AS result");
$row = $result->fetch_assoc();
?>
<h2>PERIOD_ADD Output</h2>
<p><?= $row['result'] ?></p>
