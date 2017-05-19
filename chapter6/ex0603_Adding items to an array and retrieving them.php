<?php
echo "ex0603 <br>";
echo "Adding items to an array and retrieving them <br><br>";

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
for ($j = 0 ; $j < 4 ; ++$j)
echo "$j: $paper[$j]<br>";
?>