<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Logical</title>
	</head>
	<body>
	<h2>If statements.</h2>
	<?php
			$a = 4;
			$b = 3;

			if ($a > $b) {
				echo "A is larger than b.";				
			} if ($a < $b) {
				echo "A is NOT larger than b.";				
			}
	/*This code could be improved using an elseif / else function*/
	?> 

	<br/>

	<?php /*Only welcomes new users to fictional site.*/

			$new_user = true;
			if ($new_user) {
				echo "<h3>Welcome!</h3>";
				echo "<h4> We're glad you're here.</h4>";				
			}
	?>

	<br/>

	<?php /*Can't divide by zero*/

			$numerator = 20;
			$denominator = 0;
			$reesult = 0;
			if ($denominator > 0) {
				$result = $numerator / $denominator;
		
			}
				echo "Result: {$result}";	
	?>


	<h2>Else and elseif statements.</h2>

	<?php
			$a = 4;
			$b = 3;

			if ($a > $b) {
				echo "A is larger than b.";				
			} elseif ($a < $b) {
				echo "A is smaller than b.";				
			} else {
				echo "A is equal to b.";				
			} 

	?>
	<br/>
	<?php
			$a = 4;
			$b = 3;

			if ($a > $b) {
				echo "A is larger than b.";				
			} else {
				echo "A is smaller than b.";				
			} 
	/*Boh examples here work.*/

	?>
	</body>
</html>