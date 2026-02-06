<?php
include "../db.php";
$result = $conn->query("SELECT WEEKOFYEAR(date_value) AS result FROM demo_data");
?>
<h2>WEEKOFYEAR Output</h2>
<table border="1">
<tr><th>Week</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
