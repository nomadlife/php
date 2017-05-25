<?php
echo "ex1004<br>";
echo "Querying a database <br><br>";

require_once 'ex1003_Selecting a database.php';
$query = "SELECT * FROM classics";
$result = mysqli_query($db_server,$query);
if (!$result) die ("Database access failed: " . mysql_error());
?>