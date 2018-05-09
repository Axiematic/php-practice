<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Constants</title>
	</head>
	<body>

		<h2>Constants</h2>
			<ul>
			<li>Can't change for the whole script (one execution of the script).</li> 
			<li>Always written in all caps.</li>
			<li>No "$" before them.</li>
			<li>You can only set a value for a constant using the define function unlike with variables where we use the "=" sign to assign a value.</li>
			</ul>

		<?php  
			$max_width = 980; /*variable*/


			define("MAX_WIDTH", 980); /*CONSTANT. We use quotes as we are providing php with the name as a string for the constant.*/
			echo MAX_WIDTH;
		?>

			<br/>

		<?php /*Can't change value. The below will spit out an error.*/
			//MAX_WIDTH += 1
			//echo MAX_WIDTH;
		?>

		<?php /*Can't redefine it either.*/
			define("MAX_WIDTH", 981);
			echo MAX_WIDTH;
		?>

	</body>
</html>