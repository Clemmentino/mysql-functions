<?php
    include "../db.php";
    $result = $conn->query("SELECT LCASE(text_value) AS result FROM demo_data");
?>
<h2>LCASE Output</h2>
<table border="1">
<tr><th>Lowercase</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>