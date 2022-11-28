<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie 1 | exo3</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
        <?php include_once("retour.php"); ?>
        <?php 
            function prixTTC($prix, $tva){
                $resultat = $prix + $prix * $tva;
                return $resultat;
            }
            function prixTotTTC($prixTtc, $qte){
                $resultat = $prixTtc * $qte;
                return $resultat;
            }

            function totalTtc($produits){
                $total = 0;
                for ($i=0; $i < count($produits); $i++) { 
                    $prix_ttc = prixTTC($produits[$i]["prix"], $produits[$i]["tva"]);
                    $tot_ttc = prixTotTTC($prix_ttc, $produits[$i]["qte"]);
                    $total += $tot_ttc;
                }
                return $total;
            }
        ?>
        <h1>Facteur:</h1>
    <?php
        $produits = [
            ["nom"=> "Iphone", "prix"=>10000, "tva"=> 0.25, "qte"=>2],
            ["nom"=> "Ipad", "prix"=>15000, "tva"=> 0.20, "qte"=>1]
        ];
    ?>

    <table >
        <tr>
            <?php 
                foreach ($produits[0] as $key => $value) {
                    echo "<th>$key</th>";
                }
            ?>
            <th>Prix TTC Total</th>
        </tr>
        <?php
        $total = 0;
        for ($i=0; $i < count($produits); $i++) { 
            $prix_ttc = prixTTC($produits[$i]["prix"], $produits[$i]["tva"]);
            $tot_ttc = prixTotTTC($prix_ttc, $produits[$i]["qte"]);
    
            echo "<tr>";
            foreach($produits[$i] as $key => $val) { 
                echo "<td>$val</td>";
            }
            echo "<td>$tot_ttc</td>";
            echo "</tr>";
        }
        echo "<tr></tr>";
        echo "<tr><td>Total TTC:</td> <td>". totalTtc($produits) ."</td></tr>";
        ?>
    </table>
</body>
</html>