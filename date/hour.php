<?php
include "../db.php";
$result = $conn->query("SELECT HOUR(created_at) AS result FROM demo_data");
?>
<h2>HOUR Output</h2>
<table border="1">
<tr><th>Hour</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
