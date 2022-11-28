<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les classes</title>
</head>
<body>
    <?php
        // inclusion
        spl_autoload_register(function ($class_name) {
            include "Etudiant.php";
        });

        /* Test : */
        date_default_timezone_set('Europe/Paris');
        $etu = new Etudiant(234,"Talon",time());
        $etu2 = new Etudiant(235,"Hassan",time());


        var_dump($etu);
        var_dump($etu2);
        echo "<hr>";
        echo $etu->equals($etu2);
        echo "__ ". $etu2->getId() . "<br>";
        echo "__ ". $etu2;
    ?>
</body>
</html>