<?php 

	$stringOne = 'my email is ';
	$stringTwo = 'mario123@thenetninja.co.uk';

	$resultat = $stringOne . $stringTwo;

	
	$name = 'mario';

	
	
/*	
	// get single characters
	echo $name[1];

	// string functions
	echo strlen($name);
	echo strtoupper($name);
	echo strtolower($name);
	echo str_replace('m', 'w', $name);
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>
	<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="variable.php">Variable</a></li>
            <li><a href="constante.php">Constante</a></li>
            <li><a href="concatenation.php">Concatenation</a></li>
        </ul>
    </nav>

	<p>
	<?php 
	echo $stringOne . "<br>";
	echo $stringTwo . "<br>";
	echo $resultat; 

	// concatenation
	echo 'Hey, my name is '.$name;
	// variable interpolation
	echo "<br> Hey, my name is $name <br>"; 
	echo 'Hey, my name is $name <br>'; 
	echo "<hr>";
	// escaping characters
	echo "the ninja screamed \"whaaa\"<br>";
	echo 'the ninja scream \'whaaa\'<br>';
	echo 'the ninja screamed "whaaa"<br>';
	echo "the ninja scream 'whaaa'<br>";
	?>
	</p>

</body>
</html>