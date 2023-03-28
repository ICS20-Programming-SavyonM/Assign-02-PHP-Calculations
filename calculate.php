<!DOCTYPE html>
<html>
<head>
	<title>Elliptical Calculations</title>
</head>
<body>
	<h1>Elliptical Calculations</h1>
	<p>Enter the major and minor axis lengths of an ellipse below to calculate its area and circumference:</p>
  <!--Show results back to user-->
	<form method="post" action="index.php">
		<label for="major_axis">a:</label>
		<input type="text" name="major_axis" id="major_axis"><br><br>
		<label for="minor_axis">b:</label>
		<input type="text" name="minor_axis" id="minor_axis"><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>