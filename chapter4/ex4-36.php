<?php
echo "ex4-36<br>";
echo "Trapping division-by-zero errors using continue <br><br>";


$j = 10;
while ($j > -10)
{
$j--;
if ($j == 0) continue;
echo (10 / $j) . "<br>";
}
?>