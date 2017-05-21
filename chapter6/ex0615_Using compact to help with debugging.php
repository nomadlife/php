<?php
echo "ex0615 <br>";
echo "Using compact to help with debugging <br><br>";

  $j       = 23;
  $temp    = "Hello";
  $address = "1 Old Street";
  $age     = 61;
  print_r(compact(explode(' ', 'j temp address age')));

  ?>
