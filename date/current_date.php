<?php
include "../db.php";
$result = $conn->query("SELECT CURRENT_DATE() AS result");
$row = $result->fetch_assoc();
?>
<h2>CURRENT_DATE Output</h2>
<p><?= $row['result'] ?></p>
