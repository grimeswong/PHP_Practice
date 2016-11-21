<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <?php
      $param = 51;
      switch ($param) {
        case ($param > 100) :
          echo "param > 100 ";
          break;
        case ($param < 10) :
          echo "param < 10 ";
          break;
        default :
          echo ("param is unknown");

      }
   ?>
</body>
</html>
