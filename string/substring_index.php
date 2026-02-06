<?php
    include "../db.php";
    $result = $conn->query("SELECT SUBSTRING_INDEX('PHP-MySQL-HTML', '-', 2) AS result");
    $row = $result->fetch_assoc();
?>
<h2>SUBSTRING_INDEX Output</h2>
<p><?= $row['result'] ?></p>