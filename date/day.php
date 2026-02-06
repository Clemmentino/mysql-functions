<?php
include "../db.php";
$result = $conn->query("SELECT DAY(date_value) AS result FROM demo_data");
?>
<h2>DAY Output</h2>
<table border="1">
<tr><th>Day</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
