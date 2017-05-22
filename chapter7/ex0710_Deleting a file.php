<?php // deletefile.php
echo "ex0710<br>";
echo "Deleting a file <br><br>";

if (!unlink('testfile2.new')) echo "Could not delete file";
else echo "File 'testfile2.new' successfully deleted";
?>