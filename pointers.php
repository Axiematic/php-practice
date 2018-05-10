<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Pointers</title>
	</head>
	<body>
		<h2>Pointers</h2>
		<p>Pointers work behind the scenes pointing at each item in an array in turns. Generally starting with the first item however we can manipulate this.</p>

		<?php 

		$ages = array(4,8,15,16,23,42);

		// current: current pointer value
		echo "1: " . current($ages) . "<br/>";

		next($ages); // Moves the pointer forward. Similar to using "continue" inside a loop.
		echo "2: " . current($ages) . "<br/>";

		next($ages); //Moves ahead two items in the array.
		next($ages);
		echo "3: " . current($ages) . "<br/>";

		prev($ages); // Moves back an item.
		echo "4: " . current($ages) . "<br/>";

		reset($ages); // Moves pointer back to the beginning.
		echo "5: " . current($ages) . "<br/>";

		end($ages); // Moves pointer to the last element.
		echo "6: " . current($ages) . "<br/>";

		next($ages); 
		echo "7: " . current($ages) . "<br/>";

		?>

		<br/>

		<?php
		reset($ages); // As we left it on null. 
		while($age = current($ages)) {
			echo $age . ", ";
		 	next($ages);
		 } 
		?>

	</body>
</html>