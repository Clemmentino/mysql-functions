<?php
    include "../db.php";
    $result = $conn->query("SELECT INSERT(text_value, 1, 5, 'Demo') AS result FROM demo_data");
?>
<h2>INSERT Output</h2>
<table border="1">
<tr><th>Result</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>