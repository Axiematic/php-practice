<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>untitled</title>
	</head>
	<body>
	<h2></h2>
	<h3>Comparison Operators</h3>
	<ul>
		<li>equal: ==</li>
		<li>identical: === (same type and equal).</li>
		<li>compare: >, <, >=, <=, <></li>
		<li>not equal: != (! replaces the first =)</li>
		<li>not identical: !== (! replaces the first =)</li>
	</ul>
	<h3>Logical Operators</h3>
	<ul>
		<li>and: && (eg if a > b AND c > d then...)</li>
		<li>or: || (eg if a > b or c > d then...)</li>
		<li>not: !</li>
	</ul>

	<?php
		$a = 4;
		$b = 3;
		$c = 1;
		$d = 20;
		if (($a > $b) || ($c > $d)) {
			echo "a is larger than b OR";
			echo " c is larger than d";
		} 
	?><br/>

	</br>
	
	<?php
		$e = 100;
		if (!isset($e)) {
			$e = 200;
		}
		echo $e;
		/*If $e isn't set, set it to 200.*/
	?><br/>

	<br/>

	<?php 
		/*Dont reject 0 or 0.0*/
		$quantity = "";
		if (empty($quantity) && !is_numeric($quantity)) {
			echo "You shall not pass!";
		}
	?>


	</body>
</html>