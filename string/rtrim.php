<?php
    include "../db.php";
    $result = $conn->query("SELECT RTRIM('MySQL   ') AS result");
    $row = $result->fetch_assoc();
?>
<h2>RTRIM Output</h2>
<p><?= $row['result'] ?></p>