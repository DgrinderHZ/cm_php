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

    echo "Modification des éléments <br> <hr>";
    // Modification des éléments
    $les_notes[3] = 20;
    $les_notes[1] = $les_notes[0] + $les_notes[4];

    // Affichage
    for ($i=0; $i <= 4; $i++) { 
        echo $les_notes[$i] . "<br>";
    }

    // syntaxe 2 de declaration d'un tableau php
    $les_noms = ["Hassan", "Salah", "Salah2", "Salah3", "abdo", "mimon", "Ismail", "Soufian"];
 
    // FIN CODE PHP
    ?>

    <br><hr>
    <table>
        <tr>
            <th>Numero</th>
            <th>Nom</th>
        </tr>
        <?php
            for ($i=0; $i < count($les_noms); $i++) { 
                echo "<tr><td>$i</td>";
                echo "<td>$les_noms[$i]</td></tr>";
            }
        ?>
    </table>
</body>
</html>