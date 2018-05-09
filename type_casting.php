<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Type juggling and casting</title>
		<!-- Type juggling is when php automatically converts one type into another for us without us asking. Type casting is when we ask it to. -->
	</head>
	<body>

		<h2>Type Juggling </h2>

			<?php $count = "2";  ?>
			Type: <?php echo gettype($count); ?><br/>

			<?php $count += 3; /*automatically changes it into an integer for you*/?>
			Type: <?php echo gettype($count); ?><br/>

			<?php echo $cats = "I have " . $count . " cats.";  ?><br/>
			Cats: <?php echo gettype($cats); ?><br/>


		<br/>

		<h2>Type Casting </h2>	
		
			<?php settype($count, "integer"); ?>	
			count: <?php echo gettype($count); /*settype changes the type INPLACE (permanent)*/ ?><br/>

			<?php $countNew = (string) $count; ?>
			count: <?php echo gettype($count); ?><br/>
			countNew: <?php echo gettype($countNew); /*The change takes place only here and isn't permanent*/ ?><br/>
			<br/>

			<?php $test1 = 3; ?>
			<?php $test2 = 3; ?>

			<?php settype($test1, "string"); ?>
			<?php (string) $test2; ?><br/>

			test1: <?php echo gettype($test1); ?><br/>
			test2: <?php echo gettype($test2); ?><br/>	

	</body>
</html>