<?php
echo "ex4-25_filelist <br>";
echo "Alternate switch statement syntax <br><br>";


$dir    = 'C:\Apache24\htdocs\php\chapter4';
//$dir2 = 'localhost/';

echo $dir."<br>";

$files1 = scandir($dir);
// print_r($files1);
?>

<ol>

<?php

foreach($files1 as $item)
{
  echo '<li><a href="'.$item.'">'.$item.'</a></li>';
}
?>

</ol>
