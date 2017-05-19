<?php
echo "ex0519 <br>";
echo "Defining a property implicitly <br><br>";

$object1 = new User();
$object1->name = "Alice";
echo $object1->name;
class User {}
?>