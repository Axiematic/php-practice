<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>NULL</title>

<!-- Things considered empty/not set (therefore null) "" (empty string), null, 0 (number zero), 0.0 (floating zero), false, array() (an empty array) -->

	</head>
	<body>

	<?php

	$var1 = null;
	$var2 = "";
	?>

	var1 null?: <?php echo is_null($var1); ?><br/>
	var2 null?: <?php echo is_null($var2); ?><br/>
	var3 null?: <?php echo is_null($var3); /*Since var3 hasn't been defined it is infact null. Null is the lack of having a value*/?><br/>

	<br/>

	var1 is set?: <?php echo isset($var1); ?><br/>
	var2 is set?: <?php echo isset($var2); ?><br/>
	var3 is set?: <?php echo isset($var3); ?><br/>

	<br/>

	<?php $var3 = "0"?>
	var1 is empty?: <?php echo empty($var1); ?><br/>
	var2 is empty?: <?php echo empty($var2); ?><br/>
	var3 is empty?: <?php echo empty($var3); ?><br/>
	</body>
</html>