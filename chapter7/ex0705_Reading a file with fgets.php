<?php
echo "ex0705<br>";
echo "Reading a file with fgets <br><br>";

$fh = fopen("testfile.txt", 'r') or
die("File does not exist or you lack permission to open it");
$line = fgets($fh);
fclose($fh);
echo $line;
?>