<?php // query.php
echo "ex1006<br>";
echo "Replacement for loop for fetching results one row at a time <br><br>";

require_once 'ex1001_The login file.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysqli_select_db($db_server,$db_database)
or die("Unable to select database: " . mysql_error());

$query = "SELECT * FROM classics";
$result = mysqli_query($db_server,$query);
if (!$result) die ("Database access failed: " . mysql_error());

$rows = mysqli_num_rows($result);


for ($j = 0 ; $j < $rows ; ++$j)
{
	$row = mysqli_fetch_row($result);
	echo 'Author: ' . $row[0] . '<br>';
	echo 'Title: ' . $row[1] . '<br>';
	echo 'Category: ' . $row[2] . '<br>';
	echo 'Year: ' . $row[3] . '<br>';
	echo 'ISBN: ' . $row[4] . '<br><br>';

	/*
	echo 'Author: ' . mysql_result($rows,$j,'author') . '<br>';
	echo 'Title: ' . mysql_result($rows,$j,'title') . '<br>';
	echo 'Category: ' . mysql_result($rows,$j,'category') . '<br>';
	echo 'Year: ' . mysql_result($rows,$j,'year') . '<br>';
	echo 'ISBN: ' . mysql_result($rows,$j,'isbn') . '<br><br>';
	*/
}
mysqli_close($db_server);
?>