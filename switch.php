<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Switch Statementss</title>
	</head>
	<body>
	<h2>Switch Statements</h2>

	<p>Comparisson of equality. Simialr to else if statements in the way that they follow one after the other until a fit is found however once a fit is found it will autpmatically echo every following answer irregardless of validility UNLESS you include a break between each. Ie is the value of the variable in question EQUAL TO case test 1? case test 2? etc.</p>

	<?php 
		$a = 2;

		switch ($a) {
			case 0:
				echo "A equals 0. <br/>";
				break;
			case 1:
				echo "A equals 1. <br/>";
				break;
			case 2:
				echo "A equals 2. <br/>";
				break;
			case 3:
				echo "A equals 3. <br/>";
				break;
			default:
				echo "a is not 0, 1, 2, 3<br/>";
				break;
		}
	?>

	<?php /*Whitespace doesn't matter. Colons, semicolons and breeaks do.*/
		   /* Takes the year minuses four and then divides by 12 and spits out only the remainder of the 12 using the "%"*/

	$year = 2013;
	switch (($year - 4) % 12) {
		case 0: $zodiac = 'Rat'; break;
		case 1: $zodiac = 'Ox'; break;
		case 2: $zodiac = 'Tiger'; break;
		case 3: $zodiac = 'Rabbit'; break;
		case 4: $zodiac = 'Dragon'; break;
		case 5: $zodiac = 'Snake'; break;
		case 6: $zodiac = 'Horse'; break;
		case 7: $zodiac = 'Goat'; break;
		case 8: $zodiac = 'Monkey'; break;
		case 9: $zodiac = 'Rooster'; break;
		case 10: $zodiac = 'Dog'; break;
		case 11: $zodiac = 'Pig'; break;
	}
	echo "{$year} is the year of the {$zodiac}.<br/>";

	?>

	<?php /*Case with multiple values*/
	$user_type = 'customer';
	switch ($user_type) {
		case 'student':
			echo "Welcome!";
			break;
		case 'press':
			echo "Please leave";
			break;
		case 'customer':
			echo "Hello";
			break;
		}
	?>



	</body>
</html>