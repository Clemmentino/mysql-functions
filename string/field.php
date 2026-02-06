<?php
    include "../db.php";
    $result = $conn->query("SELECT FIELD(text_value, 'Hello World','Sample Text','PHP and SQL') AS result FROM demo_data");
?>
<h2>FIELD Output</h2>
<table border="1">
<tr><th>Position</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>