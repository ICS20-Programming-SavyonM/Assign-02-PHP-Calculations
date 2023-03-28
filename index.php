<!DOCTYPE html>
<html>
<head>
   <!--metadata--> 
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Savyon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For favicon on page--> 
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
<link rel="stylesheet" href="./css/style.css" />
</head>
<body>
	<h1>Elliptical Calculations</h1>
  <!--id for values-->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="major_axis">a:</label>
		<input type="text" name="major_axis" id="major_axis"><br><br>
		<label for="minor_axis">b:</label>
		<input type="text" name="minor_axis" id="minor_axis"><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
	<br>
 <!--calculate values-->
	<?php
		if (isset($_POST["submit"])) {
			$major_axis = $_POST["major_axis"];
			$minor_axis = $_POST["minor_axis"];
			$area = pi() * $major_axis * $minor_axis;
			$circumference = 2 * pi() * sqrt(($major_axis * $major_axis + $minor_axis * $minor_axis) / 2);
			echo "<p>Area: " . round($area, 2) . "m2</p>";
			echo "<p>Circumference: " . round($circumference, 2) . "m2</p>";
		}
	?>
      <!--table of circles and ellipses-->
      <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Real life examples of ellipses and circles</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">The pattern of light in your eye, on the retina </td>
      
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Pizza</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Football</td>
    </tr>
  </tbody>
</table>
  <br>
  <img src= "./images/pizza.jpeg" width = "616" height = "462"     
    </body>
</html>