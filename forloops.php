<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>For Loops</title>
	</head>
	<body>
		<h2>For Loops</h2>
			<p>Very similar to While Loops as they repeat the code until a condition is met. However the syntax iss very different. The Initial 	function runs only once before the start of the loop. Test will be run at the start of each loop, like the while loop. Each will be run at the end of every loop before it goes back to "test".</p>
				<h3>for (initial; test; each)<br/>
				statement.</h3> 
			</p>

		<?php /*While loop example and their relation to for loops.*/
		$count = 0; /*Similar to initial*/
		while ($count <= 10) {
			echo $count . ", ";
			$count++;
			}
		?>
	<br/>
		<?php

		for($count = 0; $count <= 10; $count++) {
			echo $count . ", ";
		}
		?>

	<br/>
		<?php 

		for($count = 20; $count > 0; $count--) { 
		 	if ($count % 2 == 0) {
		 	echo "{$count} is even.<br/>";
		 	} 
		 	else {
		 	echo "{$count} is odd.<br/>";
		 	}
		} 
		?>

	</body>
</html>