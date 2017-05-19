<?php
echo "ex0511 <br>";
echo "Creating and interacting with an object <br><br>";

$object = new User;
echo "Empty Class <br>";
print_r($object); 
echo "<br><br>";


$object->name = "Joe";
$object->password = "mypass";

echo "after input value <br>";
print_r($object); 
echo "<br>";

$object->save_user();
class User
{
public $name, $password;
function save_user()
{
echo "Save User code goes here";
}
}
?>