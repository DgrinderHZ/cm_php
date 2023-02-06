<?php
    function somme2($t){
        $somme = 0;
        for ($i=0; $i < count($t); $i++) { 
            $somme = $somme + $t[$i];
        }
        return $somme;
    }