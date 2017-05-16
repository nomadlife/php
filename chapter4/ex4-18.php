<?php // Te “if...OR” statement modifed to ensure calling of getnext
$gn = getnext();
if ($finished == 1 OR $gn == 1) exit;
function getnext()
{
    echo "Example function.\n";
    return 1;
}
?>