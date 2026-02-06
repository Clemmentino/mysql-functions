<?php
    include "../db.php";
    $result = $conn->query("SELECT INSTR(text_value, 'SQL') AS result FROM demo_data");
?>
<h2>INSTR Output</h2>
<table border="1">
<tr><th>Position</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>