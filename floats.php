<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Floating point numbers (Decimals)</title>
	</head>
	<body>
			<?php echo $float = 3.14; ?><br/>
			<?php echo $float + 7; ?><br/>
			<?php echo 4/3; ?><br/>

		<br/>
Round:		<?php echo round($float,1); /*Rounds the float to the specified decimal place.*/ ?><br/>
Ceiling: 	<?php echo ceil($float); /*Rounds up to the neearest whole*/ ?><br/>
Floor: 		<?php echo floor($float); /*Rounds down to the neearest whole*/ ?><br/>

		<br/>

			<?php $integer = 3; ?>

			<?php echo "Is {$integer} integer?" . is_int($integer); /*Is $integer (3) an integer? Yes (True) therefore output is 1*/ ?><br/>
			<?php echo "Is {$float} integer?" . is_int($float); /*Is $float (3) an integer? No (false) therefore output is nothing*/ ?><br/>
		<br/>
			<?php echo "Is {$integer} float?" . is_float($integer); /*Is $integer (3) a float? No (Flase) therefore output is nothing*/ ?><br/>
			<?php echo "Is {$float} float?" . is_float($float); /*Is $float (3) an float? Yes (True) therefore output is 1*/ ?><br/>
		<br/>
			<?php echo "Is {$integer} numeric?" . is_numeric($integer); /*Is $integer (3) an integer? Yes (True) therefore output is 1*/ ?><br/>
			<?php echo "Is {$float} numeric?" . is_numeric($float); /*Is $float (3) an integer? Yes (True) therefore output is 1*/ ?><br/>
	</body>
</html>