<?php
echo "ex0518 <br>";
echo "Creating and accessing a static method <br><br>";

User::pwd_string();
class User
{
static function pwd_string()
{
echo "Please enter your password";
}
}
?>