<?php
    include "../db.php";
    $result = $conn->query("SELECT MID(text_value, 2, 5) AS result FROM demo_data");
?>
<h2>MID Output</h2>
<table border="1">
<tr><th>Substring</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>