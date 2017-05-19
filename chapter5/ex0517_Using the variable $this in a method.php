<?php
echo "ex0516 <br>";
echo "Using the variable $this in a method <br><br>";

class User
{
public $name, $password;
function get_password()
{
return $this->password;
}
}
?>
