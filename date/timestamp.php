<?php
include "../db.php";
$result = $conn->query("SELECT TIMESTAMP(date_value, '12:00:00') AS result FROM demo_data");
?>
<h2>TIMESTAMP Output</h2>
<table border="1">
<tr><th>Timestamp</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
