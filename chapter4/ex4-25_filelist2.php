<?php
echo "ex4-25_filelist2 <br>";

$dir    = 'C:\Apache24\htdocs\php\chapter4';
echo $dir."<br>";

$files1 = scandir($dir);
$files2 = scandir($dir, 1);


print_r($files1);
echo "<br>";
print_r($files2);
?>