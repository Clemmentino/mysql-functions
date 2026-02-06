<?php
    include "../db.php";
    $result = $conn->query("SELECT FIND_IN_SET('Sample Text', text_value) AS result FROM demo_data");
?>
<h2>FIND_IN_SET Output</h2>
<table border="1">
<tr><th>Result</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr><td><?= $row['result'] ?></td></tr>
<?php endwhile; ?>
</table>