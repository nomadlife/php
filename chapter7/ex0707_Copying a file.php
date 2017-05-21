<?php
echo "ex0706<br>";
echo "Reading a file with fread <br><br>";

  copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
  echo "File successfully copied to 'testfile2.txt'";
?>
