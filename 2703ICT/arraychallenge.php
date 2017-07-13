<?php
  $array = array(1, 2, 3);
  $array[] = "three";
  $array[3] = "four";
  echo join(', ', $array);
  // result: 1, 2, 3, four
 ?>
