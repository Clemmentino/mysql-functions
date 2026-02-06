<?php include "../db.php";
$r=$conn->query("SELECT COALESCE(NULL, text_value) AS result FROM demo_data");
while($row=$r->fetch_assoc()) echo $row['result']."<br>";
?>