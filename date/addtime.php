<?php
include "../db.php";
$result = $conn->query("SELECT ADDTIME(created_at, '02:30:00') AS result FROM demo_data");
?>
<h2>ADDTIME Output</h2>
<table border="1">
<tr><th>Datetime</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
