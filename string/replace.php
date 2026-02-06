<?php
    include "../db.php";
    $result = $conn->query("SELECT REPLACE(text_value, 'Demo', 'Example') AS result FROM demo_data");
?>
<h2>REPLACE Output</h2>
<table border="1">
<tr><th>Result</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>