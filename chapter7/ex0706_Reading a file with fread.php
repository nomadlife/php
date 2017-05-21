<?php
echo "ex0706<br>";
echo "Reading a file with fread <br><br>";

$fh = fopen("testfile.txt", 'r') or
die("File does not exist or you lack permission to open it");
$text = fread($fh, 3);
fclose($fh);
echo $text;
?>