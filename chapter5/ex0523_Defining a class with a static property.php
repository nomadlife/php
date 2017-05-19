<?php
echo "ex0523 <br>";
echo "Defining a class with a static property <br><br>";

$temp = new Test();
echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->get_sp() . "<br>";
echo "Test C: " . $temp->static_property . "<br>";
class Test
{
	static $static_property = "I'm static";
	function get_sp()
	{
		return self::$static_property;
	}
}
?>