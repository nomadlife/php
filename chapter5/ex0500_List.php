<?php
echo "ex5_filelist <br>";
echo "PHP Functions and Objects <br><br>";


$dir    = 'C:\Apache24\htdocs\php2\chapter5';
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
