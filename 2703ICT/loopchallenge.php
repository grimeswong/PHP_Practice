<?php
  $array = array();
  $array['username'] = 's1111111';
  $array['password'] = 'Fred';

  // echo $array['username'] . "<br>";
  // echo $array['password'] . "<br>";

  foreach ($array as $key => $value) {
    echo "The $key is $value <br>";
  }
  // result: The username is s1111111
  //         The password is Fred

 ?>
