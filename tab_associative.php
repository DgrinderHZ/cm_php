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

    // syntaxe 1 de declaration d'un tableau asssociative php
    $les_notes = ["Hassan" => 17, 
                  "Abdo" => 16, 
                  "Ismail" => 15.5,
                  "Salah" => 10,
                  "Mimon" => 13];

    print_r($les_notes);
    // Affichage
    printf($les_notes["Mimon"]) . "<br>";

    echo "Modification des éléments <br> <hr>";
    // Modification des éléments
    $les_notes["Mimon"] = 20;

    // Affichage
    print_r($les_notes);

    // syntaxe 2 de declaration d'un tableau php
    $les_noms = array("Hassan" => 17, 
                  "Abdo" => 16, 
                  "Ismail" => 15.5,
                  "Salah" => 10,
                  "Mimon" => 13);
    
    echo "<hr>";
    // Voir le contenu de tableau
    print_r($les_noms);
    echo "<br>";

    // Ajouter un nouveau element au tableau
    $les_noms["Soufian"] = 18;

    print_r($les_noms);
    
    // FIN CODE PHP
    ?>

    
</body>
</html>