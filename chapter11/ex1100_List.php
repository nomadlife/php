<?php
echo "chapter11_filelist <br>";
echo "Using the mysqli Extension <br><br>";


$ua = $_SERVER['HTTP_USER_AGENT'];
echo "OS name=".$ua."<br>";
$mac = strpos($ua, 'Macintosh') ? true : false;
if ($ua) {
  if($mac){
    $dir = '/Applications/mampstack-5.6.30-1/apache2/htdocs/php/chapter11';
  }
  else{
    $dir    = 'C:\Bitnami\wampstack-5.6.30-2\apache2\htdocs\php\chapter11';
  }
}


//$dir2 = 'localhost/';

echo "path=".$dir."<br>";

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
