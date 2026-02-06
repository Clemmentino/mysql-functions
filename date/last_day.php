<?php
include "../db.php";
$result = $conn->query("SELECT LAST_DAY(date_value) AS result FROM demo_data");
?>
<h2>LAST_DAY Output</h2>
<table border="1">
<tr><th>Last Day</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
