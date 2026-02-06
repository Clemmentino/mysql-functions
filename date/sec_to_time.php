<?php
include "../db.php";
$result = $conn->query("SELECT SEC_TO_TIME(3661) AS result");
$row = $result->fetch_assoc();
?>
<h2>SEC_TO_TIME Output</h2>
<p><?= $row['result'] ?></p>
