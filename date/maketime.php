<?php
include "../db.php";
$result = $conn->query("SELECT MAKETIME(12,30,45) AS result");
$row = $result->fetch_assoc();
?>
<h2>MAKETIME Output</h2>
<p><?= $row['result'] ?></p>
