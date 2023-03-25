<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ellipse Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Ellipse Calculator</h1>
    <?php
      $a = floatval($_POST["a"]);
      $b = floatval($_POST["b"]);
      $area = round(pi() * $a * $b, 2);
      $circumference = round(2 * pi() * sqrt(($a * $a + $b * $b) / 2), 2);
      echo "<p>The area of the ellipse is: $area</p>";
      echo "<p>The circumference of the ellipse is: $circumference</p>";
    ?>
  </body>
</html>
