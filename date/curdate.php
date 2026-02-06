<?php
include "../db.php";
$result = $conn->query("SELECT CURDATE() AS result");
$row = $result->fetch_assoc();
?>
<h2>CURDATE Output</h2>
<p><?= $row['result'] ?></p>
