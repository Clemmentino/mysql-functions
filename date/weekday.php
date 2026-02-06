<?php
include "../db.php";
$result = $conn->query("SELECT WEEKDAY(date_value) AS result FROM demo_data");
?>
<h2>WEEKDAY Output</h2>
<table border="1">
<tr><th>Weekday</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
