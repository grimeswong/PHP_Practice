<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
  <?php /* print current time */
    function longdate($timestamp)
    {
    return date("l F jS Y", $timestamp);
    }

    echo longdate(time());
    echo "</br>";
    echo longdate(time() - 17 * 24 * 60 * 60);
  ?>

  <!-- local variables -->
  <?php
    function longdate($timestamp)
    {
    $temp = date("l F jS Y", $timestamp);
    return "The date is $temp";
    }
  ?>


  
</body>
</html>
