<?php
    include "../db.php";
    $result = $conn->query("SELECT CONCAT_WS(' | ', text_value, number_value) AS result FROM demo_data");
?>
<h2>CONCAT_WS Output</h2>
<table border="1">
<tr><th>Result</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>