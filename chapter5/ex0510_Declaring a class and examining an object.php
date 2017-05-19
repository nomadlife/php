<?php
echo "ex0510 <br>";
echo "Declaring a class and examining an object <br><br>";


$object = new User;
print_r($object);
class User
{
public $name, $password;
function save_user()
{
echo "Save User code goes here";
}
}
?>
