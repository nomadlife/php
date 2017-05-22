<?php
echo "ex0707<br>";
echo "Copying a file <br><br>";

  copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
  echo "File successfully copied to 'testfile2.txt'";
?>
