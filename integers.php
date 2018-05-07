<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Integers</title>
	</head>
	<body>
		<?php

			$var1 = 3;
			$var2 = 4;
		?>

		Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?>
		<br/>
		Absolute value: <?php echo abs(0-300); /*Calculates the absolute value (non-negative)*/ ?><br/>
		Exponential: <?php echo pow(2, 8); /*Calculates 2 to the power of 8*/ ?><br/>
		Square root: <?php echo sqrt(100); /*Calculates square root of 100*/ ?><br/>
		Modulo: <?php echo fmod(20, 7); /*Calculates 20/7 but only returns the remainder (20/7=2.6*/ ?><br/>
		Random: <?php echo rand(); /*Returns random number*/ ?><br/>
		Random (mix,max): <?php echo rand(1, 10); /*Returns random number between stipulated options*/ ?><br/>

		<br/>

		+= : <?php $var2 += 4; echo $var2; /*Updates $var2 by adding 4 to it (Similar to earliar as $var2 = $var2 + 4)*/ ?><br/>
		-= : <?php $var2 -= 4; echo $var2; /*Updates $var2 */ ?><br/>
		*= : <?php $var2 *= 3; echo $var2; /*Updates $var2 */ ?><br/>
		/= : <?php $var2 /= 4; echo $var2; /*Updates $var2  - keeping all previous workings from above*/ ?><br/>

		<br/>

		Increment : <?php $var2++; echo $var2; /*increment $var2 by 1.*/ ?><br/>
		Decrement : <?php $var2--; echo $var2; /*decrement $var2 by 1.*/ ?><br/>

		<br/>

		<?php

		echo 1 + "1" /*Definitely not the same (variable vs integer) but PHP will try convert it to be the same. It's considered bad to do this, you should convert things to the same type wheen needed.*/

		?>

	</body>
</html>