<?php

function conversion($dirham){
    return $dirham/10; // retourne l'euro
}


function sommeTab($t){
    $n = count($t);
    $s = 0;

    for($i=0; $i<$n; $i++) $s += $t[$i];

    return $s;
}

function afficherTab($t){
    $n = count($t);
    for($i=0; $i<$n; $i++)
        echo "|". $t[$i] . "|";
    echo "<br>";
}

function conversionTab($t){
    $n = count($t);
    for($i=0; $i<$n; $i++) $t[$i] = conversion($t[$i]);

    afficheTab($t);
    echo "La somme est : ". sommeTab($t) . "<br>";
}

$tab = array(20, 10, 100, 200);
conversionTab($tab);