<?php
include "../db.php";
$result = $conn->query("SELECT MINUTE(created_at) AS result FROM demo_data");
?>
<h2>MINUTE Output</h2>
<table border="1">
<tr><th>Minute</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
