<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Function Arguments</title>
	</head>
	<body>
		<h2>Function: Arguments</h2>
		<p></p>
		<?php 

			function say_hello_to($word) {
		 		echo "Hello {$word}! <br/>";
		 }

		 $name = "John Doe";
		 say_hello_to($name);
		?>

		<?php 
 			function better_hello($greeting, $target, $punct) {
 				echo $greeting . " " . $target . " " . $punct . "<br/>";
 			}

 		better_hello("Hello", $name, "!");
 		better_hello("Hello", $name, null);
		?>

	</body>
</html>