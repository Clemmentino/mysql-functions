<?php
include "../db.php";
$result = $conn->query("SELECT TIME_FORMAT(created_at,'%H:%i:%s') AS result FROM demo_data");
?>
<h2>TIME_FORMAT Output</h2>
<table border="1">
<tr><th>Formatted Time</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
