<?php include "../db.php";
$r=$conn->query("
SELECT text_value,
CASE 
  WHEN number_value > 500 THEN 'High'
  ELSE 'Low'
END AS result
FROM demo_data
");
while($row=$r->fetch_assoc())
    echo $row['text_value']." - ".$row['result']."<br>";
?>