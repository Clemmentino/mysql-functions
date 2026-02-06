<?php
    include "../db.php";
    $result = $conn->query("SELECT UPPER(text_value) AS result FROM demo_data");
?>
<h2>UPPER Output</h2>
<table border="1">
<tr><th>Uppercase</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>