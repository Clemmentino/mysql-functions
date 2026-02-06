<?php
    include "../db.php";
    $result = $conn->query("SELECT LPAD(text_value, 20, '*') AS result FROM demo_data");
?>
<h2>LPAD Output</h2>
<table border="1">
<tr><th>Padded</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>