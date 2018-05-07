<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Strings</title>
	</head>
	<body>
	<?php

	echo "Hello World<br />"; 
	echo 'Hello World<br />';

	$greeting = "Goodbye";
	$greeting1 = "cruel";
	$target = "world";
	$phrase = $greeting . " " . $greeting1 . " " . $target . ".";
	echo $phrase;
	?>

	<br />

	<?php

	echo "{$phrase} Again<br/>"; /* Having the variable inside curly brackets makes defrientiating very simple */

	?>




	 <?php /* Double quotes are preferred for strings. */ ?>
	</body>
</html>