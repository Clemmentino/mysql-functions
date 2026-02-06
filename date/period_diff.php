<?php
include "../db.php";
$result = $conn->query("SELECT PERIOD_DIFF(202405,202401) AS result");
$row = $result->fetch_assoc();
?>
<h2>PERIOD_DIFF Output</h2>
<p><?= $row['result'] ?></p>
