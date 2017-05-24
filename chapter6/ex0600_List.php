<?php
echo "chapter06_filelist <br>";
echo "PHP Arrays <br><br>";


$ua = $_SERVER['HTTP_USER_AGENT'];
echo $ua."<br>";
$mac = strpos($ua, 'Macintosh') ? true : false;
if ($ua) {
  if($mac){
    $dir = '/Applications/mampstack-5.6.30-1/apache2/htdocs/php/chapter6';
  }
  else{
    $dir    = 'C:\Bitnami\wampstack-5.6.30-2\apache2\htdocs\php\chapter6';
  }
}


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
