<?php //A statement using the OR operator

if ($finished == 1 OR getnext() == 1) exit;
function getnext()
{
    echo "Example function.\n";
    return 1;
}

?>