<?php
echo "ex0606 <br>";
echo "Walking through a numeric array using foreach ... as <br><br>";

$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;
foreach($paper as $item)
{
echo "$j: $item<br>";
++$j;
}
?>