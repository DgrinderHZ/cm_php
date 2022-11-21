<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <li><a href="index.php">Home</a></li>
    </nav>

    <?php 
    // 1. les fonctions sans parametres et sans valeur de retour
    // definition
    function bonjour(){
        echo "Bonjours les etudiants d'ETTI!. <br>";
    }
    // appells
    bonjour();
    bonjour();

    // 2. les fonctions avec parametres et sans valeur de retour
    // definition
    function afficherTab($tab){
         // Affichage
         $taille = count($tab);
        for ($i=0; $i < $taille; $i++) { 
            echo $tab[$i] . " | ";
        }
        echo "<br>";
    }
    // appells
    $les_notes = [17, 16, 15.5, 10, 13];
    $les_noms = array("Hassan", "Salah", "abdo", "mimon", "Ismail", "Soufian");

    afficherTab($les_noms);
    afficherTab($les_notes);

    // 3. les fonctions sans parametres et avec valeur de retour
    // definition
    function unPlusDeux(){
        $resultat = 1+2;
        return $resultat;
    }

    function dateHeure(){
        $now = localtime(time(),true);
        $date =  $now['tm_mday'] . "/" .$now['tm_mon'] . "/" . $now['tm_year'];
        $heure =  $now['tm_hour'] . ":" .$now['tm_min'] . ":" . $now['tm_sec'];
        return $date . "(" . $heure . ") <br>";
    }
    // appells
    echo unPlusDeux() . "<br>";
    echo unPlusDeux() . "<br>";
    echo dateHeure();
    echo dateHeure();

    // 4. les fonctions avec parametres et avec valeur de retour
    // definition
    function somme($a, $b){
        $resultat = $a+$b;
        return $resultat;
    }
    // appells
    echo "Somme de 1 et 2 est " . somme(1,2) . "<br>";
    $note = 15;
    $note1 = 10;
    echo "Somme de $note et $note1 est " . somme($note,$note1);
    ?>
</body>
</html>