<?php
include "../db.php";
$result = $conn->query("SELECT SUBTIME(created_at,'01:00:00') AS result FROM demo_data");
?>
<h2>SUBTIME Output</h2>
<table border="1">
<tr><th>Datetime</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
