<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head> 
		<title>Associative Arrays </title> 
		<!-- Associative arrays aren't ordered and are rather indexed by a name and not the position. -->
	</head>
	<body>

		<?php $assoc = array("first_name" => "Emma", "last_name" => "Collier"); /*Name of object (Key) => the value */?><br/>

		<?php echo $assoc[first_name]; /*This is asking for the object that belongs to the element named "first_name*/?><br/>
		<?php echo $assoc[first_name] . " " . $assoc[last_name]; /*Asking for the object belonging to the element named "first_name*/?><br/>
		<?php $assoc["first_name"] = "Larry"; /*Assignmentt is still the same.*/ ?><br/>
		<?php echo $assoc[first_name] . " " . $assoc[last_name]; ?><br/>
		<?php echo $assoc[0]; /*Doesn't pick anything up because nothing is indexed by "0"*/ ?><br/>
	</body>
</html>