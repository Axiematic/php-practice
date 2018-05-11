<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Functions: Multiple Returns</title>
	</head>
	<body>
		<h2>Functions: Multiple Returns</h2>
		<p>As a rule, Functions only return a single value. If we want to return two values we can use an array consisting of the two variables we want.</p>
		<?php 

			Function add_subt($val1, $val2) {
				$add = $val1 + $val2;
				$subt = $val1 - $val2;
				return array($add, $subt);
			}

			$result_array = add_subt(10, 5);
			echo "Add: " . $result_array[0] . "<br/>";
			echo "Subt: " . $result_array[1] . "<br/>";

			list($add_result, $subt_result) = add_subt(20, 7);
			echo "Add: " . $add_result . "<br/>";
			echo "Subt: " . $subt_result . "<br/>";
		?>

	</body>
</html>