<?php
include "../db.php";
$result = $conn->query("SELECT TIMEDIFF('12:00:00','10:30:00') AS result");
$row = $result->fetch_assoc();
?>
<h2>TIMEDIFF Output</h2>
<p><?= $row['result'] ?></p>
