<?php
echo "ex1012<br>";
echo "Adding data to table cats <br><br>";

require_once 'ex1001_The login file.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());

$query = "INSERT INTO cats VALUES(NULL, 'Cheetah', 'Charly', 3)";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());

?>
