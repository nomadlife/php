<?php
echo 'test1<br>';
if (function_exists("mysqli"))
{
echo "Function exists";
}
else
{
echo "Function does not exist - better write our own";
}

echo 'figure 3-3<br>';
$team = array('bill', 'mary', 'mike', 'chris', 'anne');
echo $team[3];

$oxo = array(array('x', ' ', 'o'),
array('o', 'o', 'x'),
array('x', 'o', ' '));
echo $oxo[1][2];

?>
