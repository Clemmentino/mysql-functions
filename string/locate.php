<?php
    include "../db.php";
    $result = $conn->query("SELECT LOCATE('Demo', 'Database Demo') AS result");
    $row = $result->fetch_assoc();
?>
<h2>LOCATE Output</h2>
<p><?= $row['result'] ?></p>