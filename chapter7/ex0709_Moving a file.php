<?php // movefile.php
echo "ex0709<br>";
echo "Moving a file <br><br>";

if (!rename('testfile2.txt', 'testfile2.new'))
echo "Could not rename file";
else echo "File successfully renamed to 'testfile2.new'";
?>