<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Array Functions</title>
	</head>

<!-- http://php.net/manual/en/ref.array.php -->
	
	<body>

		<?php $numbers = array(8, 23, 15, 42, 16, 4); ?>

	Count:			<?php echo count($numbers); /*Counts number of elements*/ ?><br/>
	Max value:		<?php echo max($numbers); /*Outputs the highest number of array*/ ?><br/>
	Min value:		<?php echo min($numbers); /*Outputs the lowest number of array*/ ?><br/>

	<br/>

	<pre>
	Sort:			<?php echo sort($numbers); print_r($numbers); /*Sorts ascending order descructively (changed the array set-up)*/ ?><br/>
	Reverse sort:	<?php echo rsort($numbers); print_r($numbers); /*Sorts descending order descructively*/ ?><br/>
	</pre>

	<br/>

	<pre>
	Implode:		<?php echo $num_string = implode(" * ", $numbers); /* Turns the array into a string. 1st argument = the separater between each element*/ ?><br/>
	Explode:		<?php print_r(explode(" * ", $num_string)); /* Turns the string into an array. 1st argument = the separater between each element of the new array*/ ?>
	</pre>

	15 in the array?: <?php echo in_array(15, $numbers); /*Determines whether the first argument is in the array.*/ ?><br/>
	19 in the array?: <?php echo in_array(19, $numbers); ?><br/>

	</body>
</html>