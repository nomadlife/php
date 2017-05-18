<?php
echo "ex4-35<br>";
echo "Writing a file using a for loop with error trapping <br><br>";

$fp = fopen("text.txt", 'wb');
for ($j = 0 ; $j < 100 ; ++$j)
{
$written = fwrite($fp, "data");
if ($written == FALSE) break;
}
fclose($fp);
?>