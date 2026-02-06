<?php
include "../db.php";
$result = $conn->query("SELECT STR_TO_DATE('15-01-2024','%d-%m-%Y') AS result");
$row = $result->fetch_assoc();
?>
<h2>STR_TO_DATE Output</h2>
<p><?= $row['result'] ?></p>
