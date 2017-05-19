<?php
echo "ex0520 <br>";
echo "Valid and invalid property declarations <br><br>";

class Test
{
public $name = "Paul Smith"; // Valid
public $age = 42; // Valid
public $time = time(); // Invalid - calls a function
public $score = $level * 2; // Invalid - uses an expression
}
?>