<?php include "../db.php";
$r=$conn->query("SELECT CONVERT(number_value, CHAR) AS result FROM demo_data");
while($row=$r->fetch_assoc()) echo $row['result']."<br>";
?>