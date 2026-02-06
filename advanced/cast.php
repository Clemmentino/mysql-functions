<?php include "../db.php";
$r=$conn->query("SELECT CAST(number_value AS CHAR) AS result FROM demo_data");
while($row=$r->fetch_assoc()) echo $row['result']."<br>";
?>