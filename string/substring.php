<?php
    include "../db.php";
    $result = $conn->query("SELECT SUBSTRING(text_value, 2, 6) AS result FROM demo_data");
?>
<h2>SUBSTRING Output</h2>
<table border="1">
<tr><th>Substring</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>