<?php
    include "../db.php";
    $result = $conn->query("SELECT SUBSTR(text_value, 1, 6) AS result FROM demo_data");
?>
<h2>SUBSTR Output</h2>
<table border="1">
<tr><th>Substring</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>