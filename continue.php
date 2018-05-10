<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Continue Function</title>
	</head>
	<body>
		<h2>Continue</h2>
		<p>Used inside a loop to skip the reat of the current iteration and immediately move to the next evaluation, starting the next iteration. </p>


		<?php
		 for ($count=0; $count <= 10 ; $count++) { 
		 	if ($count % 2 == 0) 
		 		{continue;}
		  	echo $count . ", ";
		  } 
		?>

	<br/>

		<?php /*without $count++ appearing in the if loop this would be an indefinite loop.*/
		$count = 0;
		while ($count <= 10) {
			if ($count == 5) {
				$count++;
				continue;}
			echo $count . ", ";
			$count++;
		}
		?>

	<br/>

		<?php //loop inside a loop

		for ($i=0; $i<=5; $i++) {
			if ($i % 2 == 0) {continue;}
			for ($k=0; $k<=5; $k++) {
				if ($k == 3) {continue(2);}
				echo $i . "-" . $k . "<br/>";
			}
			}
		?>
	</body>
</html>