<?php
include "../db.php";
$result = $conn->query("SELECT ADDDATE(date_value, INTERVAL 10 DAY) AS result FROM demo_data");
?>
<h2>ADDDATE Output</h2>
<table border="1">
<tr><th>Date</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
