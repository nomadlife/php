<?php
echo "ex0521 <br>";
echo "Defining constants within a class <br><br>";

Translate::lookup();
class Translate
{
const ENGLISH = 0;
const SPANISH = 1;
const FRENCH = 2;
const GERMAN = 3;
// ...
static function lookup()
{
echo self::SPANISH;
}
}
?>