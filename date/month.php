<?php
include "../db.php";
$result = $conn->query("SELECT MONTH(date_value) AS result FROM demo_data");
?>
<h2>MONTH Output</h2>
<table border="1">
<tr><th>Month</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
