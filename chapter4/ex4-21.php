<?php
echo "ex4-21 <br>";
echo "An if...elseif...else statement with curly braces";

$bank_balance =0; // added due to error

if ($bank_balance < 100)
{
$money = 1000;
$bank_balance += $money;
}
elseif ($bank_balance > 200)
{
$savings += 100;
$bank_balance -= 100;
}
else
{
$savings += 50;
$bank_balance -= 50;
}
?>