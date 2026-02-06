<?php
include "../db.php";
$result = $conn->query("SELECT EXTRACT(YEAR FROM date_value) AS result FROM demo_data");
?>
<h2>EXTRACT Output</h2>
<table border="1">
<tr><th>Year</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
