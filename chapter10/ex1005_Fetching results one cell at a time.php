<?php // query.php
echo "ex1005<br>";
echo "Fetching results one cell at a time <br><br>";

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
	$row = mysqli_fetch_assoc($result);
	echo 'Author: ' . ($row['author']) . '<br>';
	echo 'Title: ' . ($row['title']) . '<br>';
	echo 'Category: ' . ($row['category']) . '<br>';
	echo 'Year: ' . ($row['year']) . '<br>';
	echo 'ISBN: ' . ($row['isbn']) . '<br><br>';

	/*
	echo 'Author: ' . mysql_result($rows,$j,'author') . '<br>';
	echo 'Title: ' . mysql_result($rows,$j,'title') . '<br>';
	echo 'Category: ' . mysql_result($rows,$j,'category') . '<br>';
	echo 'Year: ' . mysql_result($rows,$j,'year') . '<br>';
	echo 'ISBN: ' . mysql_result($rows,$j,'isbn') . '<br><br>';
	*/
}
?>