<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Break </title>
	</head>
	<body>
		<h2>Breaks</h2>
		<p>Stops the running for the loop entirely. Is very useful wehn we've found what we're looking for.</p>
		<?php
			for ($count=0; $count <=10; $count++) {
				if ($count == 5) {
					Break;
				}
				echo $count . ", ";
			} 
		?>

		<br/>

		<?php /*loop inside a loop with a break.*/

		for ($i=0; $i<=5; $i++) {
			if ($i % 2 == 0) {continue;}
			for ($k=0; $k<=5; $k++) {
					if ($k == 3) {break(2);}
					echo $i . "-" . $k . "<br/>";
				}
			}

		?>  


	</body>
</html>