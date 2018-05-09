<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Loops</title>
	</head>
	<body>
<h2>Loops</h2>
<p>Code written as loops will execute more than once unlike the others. After it executes once it will loop back and execute again with different values/variables. So the logical expressions do different things.</p>

<?php
	$count = 0;
	while($count <= 10) {
		if ($count == 5) {
		echo "FIVE, ";
		} else{
		echo $count . ", ";	
		}
		$count++; /*Increments by 1*/
	}
	echo "<br/>";
	echo "Count: {$count}";


?>
	</body>
</html>