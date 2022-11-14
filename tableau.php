<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    <nav>
		<li>
			<a href="index.php">Accueil</a>
		</li>
	</nav>
    <?php // DEBUT CODE PHP

    // syntaxe 1 de declaration d'un tableau php
    $les_notes = [17, 16, 15.5, 10, 13];

    // Affichage
    for ($i=0; $i <= 4; $i++) { 
        echo $les_notes[$i] . "<br>";
    }

    // FIN CODE PHP
    ?>
</body>
</html>