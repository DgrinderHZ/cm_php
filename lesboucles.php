<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
</head>
<body>
    <nav>
		<li>
			<a href="index.php">Accueil</a>
		</li>
	</nav>

    <?php 
    // DEBUT PHP
    define("RETOUR_A_LA_LIGNE", "<br>");
    for ($i=0; $i < 10; $i++) { 
        echo "$i : Bienvenu à ETTI." . RETOUR_A_LA_LIGNE;
    }

    $compteur = 10;
    while ($compteur <= 20) {
        echo "$compteur : Bienvenu à ETTI." . RETOUR_A_LA_LIGNE;
        $compteur++;
    }

    $compteur = 21;
    do {
        echo "$compteur : Bienvenu à ETTI." . RETOUR_A_LA_LIGNE;
        $compteur++;
    }while ($compteur <= 30);

    // FIN PHP
    ?>

</body>
</html>