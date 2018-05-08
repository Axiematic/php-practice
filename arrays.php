<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Arrays</title>
	</head>
	<body>

		<?php $numbers = array(4, 8, 15, 16, 23, 42);
				echo $numbers[1]; /*Brings out "1st" element of array (zero baseed numbering)*/
		
		?>
		<br/>
		<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?> <br/>
		<?php 	echo $mixed[2]; ?><br/>
		<?php 	echo $mixed[3]; ?><br/>

		<?php 	echo $mixed[3][1]; /*Will give us whats in postion 1 of element 3 (second array)*/ ?><br/>
		
		<?php $mixed[2] = "cat"; /*Adds a new value a the specific position*/ ?>
		<?php $mixed[4] = "mouse"; /*Adds a new value a the specific position*/ ?>
		<?php $mixed[] = "horse"; /*Adds a new value to the end*/ ?>

		<pre >
		<?php 	echo print_r($mixed); /*Print readable shows us each element and their positions*/ /*pre addes  indentation*/ ?> 
		</pre>

		<?php  
		/*PHP 5.4 has new short array syntax. Will read [] as an array*/
		$array = [1,2,3];
		?>

	</body>
</html>