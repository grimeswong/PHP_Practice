<?php
  // Arrays as maps
  $person['name'] = 'Tom';
  $person['age'] = 20;
  echo $person['name'], ' is ', $person['age'] . '<br>';

  // Arrays can also be intialised with key => value pairs
  $person = array('name' => 'Tom', 'age' => 20);  //result: Tom is 20

  // Arrays and variable expansion
  echo "${person['name']} is ${person['age']}";   //result: Tom is 20
?>
