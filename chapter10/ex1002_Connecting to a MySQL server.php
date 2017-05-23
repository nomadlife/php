<?php
echo "ex1002<br>";
echo "Connecting to a MySQL server <br><br>";

require_once 'ex1001_The login file.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
?>