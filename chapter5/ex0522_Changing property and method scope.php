<?php
echo "ex0522 <br>";
echo "Changing property and method scope <br><br>";

class Example
{
	var $name = "Michael"; // Same as public but deprecated
	public $age = 23; // Public property
	protected $usercount; // Protected property
	private function admin() // Private method
	{
		// Admin code goes here
	}
}
?>