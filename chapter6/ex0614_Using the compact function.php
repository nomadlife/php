<?php
echo "ex0614 <br>";
echo "Using the compact function <br><br>";

  $fname         = "Doctor";
  $sname         = "Who";
  $planet        = "Gallifrey";
  $system        = "Gridlock";
  $constellation = "Kasterborous";
  $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
  print_r($contact);

  ?>
