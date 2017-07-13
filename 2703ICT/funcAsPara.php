<?php
  $fruits[0]["fruit"] = "Lemons";
  $fruits[1]["fruit"] = "Apples";
  $fruits[2]["fruit"] = "Grapes";

  usort($fruits, function($a,$b){
    return strcmp($a["fruit"], $b["fruit"]);
  });

  foreach($fruits as $fruit) {
    echo $fruit["fruit"] . "<br>";
  }
  // result: Apples
  //         Grapes
  //         Lemons
 ?>
