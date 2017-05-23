<?php
echo "ex1003<br>";
echo "Selecting a database <br><br>";

require_once 'ex1002_Connecting to a MySQL server.php';
mysqli_select_db($db_server,$db_database)
or die("Unable to select database: " . mysql_error());
?>