<?php
    include "../db.php";
    $result = $conn->query("SELECT LTRIM('   MySQL') AS result");
    $row = $result->fetch_assoc();
?>
<h2>LTRIM Output</h2>
<p><?= $row['result'] ?></p>