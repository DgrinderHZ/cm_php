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

    $tab = ["LU"=>"Lundi",
            "MA"=>"Mardi",
            "ME"=>"Mercredi",
            "JE"=>"Jeudi",
            "VE"=>"Vendredi",
            "SA"=>"Samedi",
            "DI"=>"Dimanche",
        ];


    ?>
    <ol>
        <?php 
            foreach ($tab as $key => $value) {
                echo "<li>$key : $value</li>";
            }
        ?>
    </ol>
</body>
</html>