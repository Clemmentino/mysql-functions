<?php
include "../db.php";
$result = $conn->query("SELECT TIME_TO_SEC('01:01:01') AS result");
$row = $result->fetch_assoc();
?>
<h2>TIME_TO_SEC Output</h2>
<p><?= $row['result'] ?></p>
