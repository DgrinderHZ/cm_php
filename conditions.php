

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
            <li><a href="operateurs.php">Operateurs</a></li>
            <li><a href="conditions.php">Condititions</a></li>
        </ul>
    </nav>

	<?php 

	// comparisons & booleans (true or false)
	echo "Vrai = '" . true . "' <br>" ; // echo's "1"
	echo "Faux = '" . false . "' <br>"; // echo's ""

	// numbers
	echo 5 < 10 . "<br>";
	echo 5 > 10 . "<br>";
	echo 5 == 10 . "<br>";
	echo 10 == 10 . "<br>";
	echo 5 != 10 . "<br>";
	echo 5 <= 5 . "<br>";
	echo 5 >= 5 . "<br>";

	// strings
	echo 'shaun' < 'yoshi';
	echo 'shaun' > 'yoshi';
	echo 'shaun' > 'Shaun';
	echo 'mario' == 'mario';
	echo 'mario' == 'Mario';

	// loose vs strict equal comparison

	echo 5 == '5';
	echo 5 === '5';
	echo 5 === 5;

	echo true == 1;
	echo true === 1;
	
?>
</body>
</html>