<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Foreach Loops</title>
	</head>
	<body>
		<h2>Foreach Loops</h2>
		<p>Foreach Loops loop through an array of items and stops running at the end of the array.</p>
		<h3>foreach ($array as $value) {<br/>
		statement; <br/>
		}</h3>

		<?php /*As the loop runs each value from the array will temporarily e assigned to $age. Until the next value is run and assigned.*/
			$ages = array(4,8,15,16,23,42);

			foreach ($ages as $age) {
				echo "Age: {$age}<br/>";
			}
		?>

		<?php /*Associative array syntax.
				foreach ($array as $kay => $value) {
					statement; }*/

			$person = array(
					"first_name" => "Emma",
					"last_name" => "Collier",
					"address"  => "1 Finchley Road",
					"city" => "Durban",
					"zip_code" => "3629"
					);

			foreach ($person as $attribute => $data) {
				$attr_nice = ucwords(str_replace("_", " ", $attribute));
				echo "{$attr_nice}: {$data}<br/>";
			}

		?> 

		<br/>

		<?php
			$prices = array("Brand New Computer" => 2000,
							"1 month of Lynda.com" => 25,
							"Learning PHP" => null);

			foreach ($prices as $item => $price) {
				echo "{$item}: ";
				if (is_int($price)) {
					echo "$" . $price;
				} else {
					echo "priceless";
				}
				echo "<br/>";
			}

		?>

	</body>
</html>