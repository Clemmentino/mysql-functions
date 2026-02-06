<?php
    include "../db.php";
    $result = $conn->query("SELECT STRCMP('MySQL','MySQL') AS result");
    $row = $result->fetch_assoc();
?>
<h2>STRCMP Output</h2>
<p><?= $row['result'] ?></p>