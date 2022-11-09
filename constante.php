<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constante</title>
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
        echo "Bonjour tout le monde!" . "<br>";
        

        // Les constanntes
        echo "define(\"PI\", 3.14);" . "<br>";
        define("PI", 3.14);

        echo PI;

        //define("PI", 3.14); //: erreur 




    ?>
    </h1>
</body>
</html>