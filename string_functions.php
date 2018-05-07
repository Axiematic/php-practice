<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>String Function</title>
	</head>
	<body>
	<?php

	$first = "The quick brown fox";
	$second = " jumped over the fat cat.";

	$third = $first; /*tells us $third points to the same thing as first.*/
	$third .= $second; /*then take the same string ($third) and add $second onto it.*/
	echo $third;
	?>

	<br/>

	Lowercase: <?php echo strtolower($third); ?><br/>
	Uppercase: <?php echo strtoupper($third); ?><br/>
	Uppercase first: <?php echo ucfirst($third); ?><br/>
	Uppercase words: <?php echo ucwords($third); ?><br/>

	<br/>

	Length: <?php echo strlen($third); /*tells us length of the string.*/ ?><br/>
	Trim: <?php echo "A" . trim(" B C D ") . "E"; /*Trims... Complete functionality misunderstood.*/ ?><br/>
	Find: <?php echo strstr($third, "brown"); /*Finds the string withing the string(str in str).*/ ?><br/>
	Replace by string: <?php echo str_replace("quick", "super-fast", $third); /*Replaces the first variable with the second.*/ ?><br/>	

	<br/> 

	Repeat: <?php echo str_repeat($third, 2); /*repeats the chosen variable 2 times*/ ?><br/>
	Make substring: <?php echo substr($third, 5, 10); /*Substring from the 5th chracter - 10th (not using zero based numbering)*/ ?><br/>
	Find position: <?php echo strpos($third, "brown"); /*Postion of chosen variable*/ ?><br/>
	Find chracter: <?php echo strrchr($third, "c"); /*Returns the string along with any following data*/ ?><br/>
	</body>
</html>