<?php
include "../db.php";
$result = $conn->query("SELECT NOW() AS result");
$row = $result->fetch_assoc();
?>
<h2>NOW Output</h2>
<p><?= $row['result'] ?></p>
