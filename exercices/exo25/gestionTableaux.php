<?php

function afficherTableau(array $t): void
{
    foreach($t as $v){
        echo $v. " - ";
    }
    echo "<br>";
}

function calculerMoyenne(array $t): float
{
    $tmp = 0;
    foreach($t as $v){
        $tmp += $v;
    }
    return round($tmp/count($t), 2);
}

function estTableauPair(array $t): bool
{
    foreach($t as $v){
        if($v%2 != 0){
            return false;
        }
    }
    return true;
}