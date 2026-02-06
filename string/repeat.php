<?php
    include "../db.php";
    $result = $conn->query("SELECT REPEAT(text_value, 2) AS result FROM demo_data");
?>
<h2>REPEAT Output</h2>
<table border="1">
<tr><th>Repeated</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>