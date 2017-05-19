<?php
echo "ex0607 <br>";
echo "Walking through an associative array using foreach ... as <br><br>";

$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
foreach($paper as $item => $description)
echo "$item: $description<br>";
?>