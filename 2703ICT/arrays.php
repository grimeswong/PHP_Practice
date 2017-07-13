<?php
  $array = array(); // declare array

  $array = (1,2,3,4); // put value in the ArrayAccess

  // also work the below way
  $array1 = []; // declare an emtpy array
  $array2 = [1,2,3,4];

  // assigning elements
  $numbers = array();
  $numbers[0] = 1;
  $numbers[1] = 2;
  $numbers[2] = 3;

  // Adding to the end of an array
  // if no index is specified the maximum of the integer index values
  // is taken and that value plus one will be used
  $numbers[] = 4;
  echo $numbers[3]; // will print 4
  echo "<br>";

  echo "The total array's elements is ", count($numbers) . "<br>";   // prints 4
  echo "The total array's elements is ". count($numbers);   // prints 4

 ?>
