<?php
include "../db.php";
$result = $conn->query("SELECT DATE_SUB(date_value, INTERVAL 7 DAY) AS result FROM demo_data");
?>
<h2>DATE_SUB Output</h2>
<table border="1">
<tr><th>Date</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
