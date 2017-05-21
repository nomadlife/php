<?php
echo "ex0706<br>";
echo "Reading a file with fread <br><br>";

  if (!copy('testfile.txt', 'testfile2.txt')) echo "Could not copy file";
  else echo "File successfully copied to 'testfile2.txt'";
?>
