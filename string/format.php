<?php
    include "../db.php";
    $result = $conn->query("SELECT FORMAT(number_value, 2) AS result FROM demo_data");
?>
<h2>FORMAT Output</h2>
<table border="1">
<tr><th>Formatted Number</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>