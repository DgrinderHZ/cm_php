<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire et variables</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="variable.php">Variable</a></li>
            <li><a href="constante.php">Constante</a></li>
        </ul>
    </nav>
    <h1>
    <?php
        echo "Bonjour tout le monde!";

        // commentaire
        # commentaire
        /* commentaire
            ligne 1
            ligne 2
        */
        echo "<hr>"; // affiche une ligne separateur _____
        // Declaration des variables
        
        $a = 2;
        $nom = "Hassan";
        $x = 2.6;

        echo $a . "<br>"; 
        echo $nom . " ";
        echo $x . "<br>";
        // . est l'operateur de concatenation
        $nom_complet = "Hassan " . "Zekkouri"; 
        echo $nom_complet;

        // changement des valeurs
        $a = 34;
        echo "<br>" . $a . "<br>"; 

        $a = "une variable en PHP";
        if(isset($a)) echo "la variable a existe";
        unset($a);
        echo "la variable a a été supprimée ....";
        if(!isset($a)) echo "la variable n'existe pas";

        $a = "";
        if (!empty($a)) echo " La variable existe et elle n\'est pas vide !";
        else 
        echo "khawi"

    ?>
    </h1>
</body>
</html>