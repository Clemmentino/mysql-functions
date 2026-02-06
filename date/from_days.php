<?php
include "../db.php";
$result = $conn->query("SELECT FROM_DAYS(738000) AS result");
$row = $result->fetch_assoc();
?>
<h2>FROM_DAYS Output</h2>
<p><?= $row['result'] ?></p>
