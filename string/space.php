<?php
    include "../db.php";
    $result = $conn->query("SELECT CONCAT('A', SPACE(5), 'B') AS result");
    $row = $result->fetch_assoc();
?>
<h2>SPACE Output</h2>
<p><?= $row['result'] ?></p>