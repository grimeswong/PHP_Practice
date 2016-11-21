<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
  <?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>"; // 15
echo "7 + 13 = " . sum(7, 13) . "<br>"; // 20
echo "2 + 4 = " . sum(2, 4);            // 6
?>
</body>
</html>
