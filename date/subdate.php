<?php
include "../db.php";
$result = $conn->query("SELECT SUBDATE(date_value, INTERVAL 3 DAY) AS result FROM demo_data");
?>
<h2>SUBDATE Output</h2>
<table border="1">
<tr><th>Date</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
