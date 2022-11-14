<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entré</title>
</head>
<body>
    Bonjour, 
    <h1>
        <?php
        define("RETOUR_A_LA_LIGNE", "<br>");

        var_dump($_POST);
        echo RETOUR_A_LA_LIGNE;
        print_r($_POST);
        echo RETOUR_A_LA_LIGNE;
        echo $_POST['nom']; ?>.
        Tu as <?php echo (int)$_POST['age']; ?> ans.

    </h1>
</body>
</html>