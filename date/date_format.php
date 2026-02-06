<?php
include "../db.php";
$result = $conn->query("SELECT DATE_FORMAT(date_value,'%M %d, %Y') AS result FROM demo_data");
?>
<h2>DATE_FORMAT Output</h2>
<table border="1">
<tr><th>Formatted Date</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>
