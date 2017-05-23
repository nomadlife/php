<?php
echo "ex1004<br>";
echo "Querying a database <br><br>";

$query = "SELECT * FROM classics";
$result = mysqli_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
?>