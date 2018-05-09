<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Logical</title>
	</head>
	<body>

	<?php
			$a = 4;
			$b = 3;

			if ($a > $b) {
				echo "A is larger than b.";				
			}
			if ($a < $b) {
				echo "A is NOT larger than b.";				
			}
	/*This code could be improved using an elseif / else function*/
	?> 

	<br/>

	<?php /*Only welcomes new users to fictional site.*/

			$new_user = true;
			if ($new_user) {
				echo "<h1>Welcome!</h1>";
				echo "<p> We're glad you're here.</p>";				
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

	</body>
</html>