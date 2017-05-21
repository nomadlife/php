<?php
echo "ex0703<br>";
echo "Checking for the validity of a date <br><br>";

$month = 9; // September (only has 30 days)
$day = 31; // 31st
$year = 2018; // 2018
if (checkdate($month, $day, $year)) echo "Date is valid";
else echo "Date is invalid";
?>