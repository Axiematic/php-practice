<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Functions: Scope and Global Variables</title>
	</head>
	<body>
		<h2>Functions: Scope and Global Variables</h2>
		<p>The division between the variables inside a function and outside the function is known as the variable's <b>Scope</b>.<br/>
		<br/>
		A variable created inside a function is by default only accessible in the function (<b>Local</b>).<br/>
		<br/> 
		Variables created outside of functions are available anywhere outside of functions, but not inside any function (<b>Global</b>).<br/>
		<br/>
		Hence using return/result to retrieve the value instead of an echo.<br/> 
		<br/> 


		<?php

			$bar = "outside"; //Global scope

			function foo() {
				global $bar;
				if (isset($bar)) {
					echo "foo:" . $bar . "<br/>";
			}
				$bar = "inside"; //Local scope
			}

			echo "1: " . $bar . "<br/>";
			foo();
			echo "2: " . $bar . "<br/>";
		?>

	</body>
</html>