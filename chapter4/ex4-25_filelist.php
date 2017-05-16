// <?php

echo "ex4-25_filelist <br>";

$dir    = 'C:\Apache24\htdocs\php\chapter4';

echo $dir."<br>";

$files1 = scandir($dir);
?>

<ol>

<?php

while($row = arrayyy($files1)){
  echo '<li><a href="'.$dir.$row.'">'.$row.'</a></li>';
}
?>

</ol>
