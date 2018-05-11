<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Defining Functions</title>
	</head>
	<body>
		<h2>Defining Functions</h2>
		<p>Functions perform a specified task. We aren't limited to php's built in functions, we can create our own with:<br/></p>
		
		<h4>function name($arg1, $arg2) {<br/>
			statement;<br/>
			}</h4>

		<?php

		 function say_hello() {
		 	echo "Hello from the other side. <br/>";
		 }

		 say_hello();


		 function say_hello_to($word) {
		 	echo "Hello from the other side {$word}. <br/>";
		 }

		 say_hello_to("my old friend");
		 say_hello_to("Everyone");
		 say_hello_loudly("JASON");

		 function say_hello_loudly($word) {
		 echo "HELLLOOOOOOO {$word}! <br/>";
		 }

		?>

	</body>
</html>