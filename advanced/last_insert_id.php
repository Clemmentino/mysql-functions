<?php include "../db.php";
$conn->query("INSERT INTO demo_data (text_value,number_value,date_value,created_at)
VALUES ('Inserted Row',123,'2024-01-01',NOW())");
$r=$conn->query("SELECT LAST_INSERT_ID() AS result");
echo $r->fetch_assoc()['result'];
?>