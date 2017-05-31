<?php
echo "ex1018<br>";
echo "How to properly sanitize user input for MySQL <br><br>";

function mysql_fix_string($string)
{
if (get_magic_quotes_gpc()) $string = stripslashes($string);
return mysql_real_escape_string($string);
}
?>