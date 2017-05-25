<?php
echo "ex1015<br>";
echo "Removing Growler the cougar from the cats table <br><br>";

require_once 'ex1001_The login file.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());

$query = "DELETE FROM cats WHERE name='Growler'";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());

?>