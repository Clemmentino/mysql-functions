<?php
    include "../db.php";
    $result = $conn->query("SELECT RPAD(text_value, 25, '.') AS result FROM demo_data");
?>
<h2>RPAD Output</h2>
<table border="1">
<tr><th>Padded</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>