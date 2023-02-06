<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once("retour.php"); ?>
    <?php include_once("somme2.php"); ?>



    <?php 

    $tab = [3, 12, 2, 4];

    $somme = 0;
    for ($i=0; $i < count($tab); $i++) { 
        $somme = $somme + $tab[$i];
    }

    echo "La somme est : " . $somme . "<br>";

    function somme($t){
        $somme = 0;
        for ($i=0; $i < count($t); $i++) { 
            $somme = $somme + $t[$i];
        }
        return $somme;
    }
    echo "La somme est : " . somme($tab) . "<br>";

    echo "La somme est : " . somme2($tab) . "<br>";

    ?>
</body>

</html>