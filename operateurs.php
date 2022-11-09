<?php 

	
/*
	// number functions

	echo floor($pi);
	echo ceil($pi);
	echo pi();
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p><?php 
	
	$radius = 5;
	$pi = 3.14;

	// basic operators : *, /, +, -, **
	// order of operation (B I D M A S)  () ** / * + -
	$per = $pi * $radius**2;
	echo "Le perimetre est $per <br>";

	echo 2 * (4 + 5) / 3 . "<br>";

	// increment & decrement operators

	echo "Radius = " . $radius++ . "<br>";
	echo "Radius = " . $pi-- . "<br>";

	echo "Radius = " . $radius . "<br>";
	echo "Radius = " . $pi . "<br>";

	echo "Radius = " . ++$radius . "<br>";
	echo "Radius = " . --$pi . "<br>";

	// shorthand operations

	$age = 20;
	$age += 10; // age becomes 30
	$age -= 5; // age becomes 25
	$age *= 2; // age becomes 50

	echo $age . "<br>";
	?></p>

</body>
</html>