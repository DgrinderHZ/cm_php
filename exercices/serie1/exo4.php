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


    <?php 

    function dateHeure(){
        $now = localtime(time(),true);
        $date =  "Nous sommes le : " . $now['tm_mday'] . "/" .$now['tm_mon'] . "/" . $now['tm_year'];
        $heure = "<br>Il est : " . $now['tm_hour'] . ":" .$now['tm_min'] . ":" . $now['tm_sec'];
        
        $dt = new DateTime("now", new DateTimeZone('America/New_York'));

        echo $dt->format('m/d/Y, H:i:s'). "<br>";

        return $date .  $heure . "<br>Merci ";
    }
    // appells
    echo dateHeure();

    ?>
</body>

</html>