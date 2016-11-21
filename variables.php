<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php /* assign variables (text, number and array) */
    $myCounter = 1;
    $myString = "Hello";
    $myArray = array("One","Two","Three");
    echo $myString;
  ?>

  <?php /* static variable for reusing */
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest(); //output: 0
    myTest(); //output: 1
    myTest(); //output: 2
    echo "</br> Good </br>";
    myTest(); //output: 3
  ?>
</body>
</html>
