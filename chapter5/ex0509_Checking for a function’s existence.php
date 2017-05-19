<?php
echo "ex0509 <br>";
echo "Checking for a function’s existence <br><br>";


if (function_exists("array_combine"))
{
echo "Function exists";
}
else
{
echo "Function does not exist - better write our own";
}
?>