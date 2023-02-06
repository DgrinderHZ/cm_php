<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie 1 | exo3</title>
    <style>
    table,
    td,
    th {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <?php 
        include_once("retour.php"); 
        // inclusion
        spl_autoload_register(function ($class_name) {
            include "Produit.php";
        });
        ?>

    <h1>Facteur:</h1>
    <?php
        $produits = [
            new Produit("Iphone", 10000, 0.25, 2),
            new Produit("Ipad", 15000, 0.2, 1)
        ];
    ?>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>TVA</th>
            <th>Quantité</th>
            <th>Prix TTC Total</th>
        </tr>
        <?php
        $total = 0;
        for ($i=0; $i < count($produits); $i++) { 
            $total += $produits[$i]->prixTotTTC();
            echo "<tr>";
            echo $produits[$i];
            echo "</tr>";
        }
        echo "<tr></tr>";
        echo "<tr><td>Total TTC:</td> <td>$total</td></tr>";
        ?>
    </table>
</body>

</html>