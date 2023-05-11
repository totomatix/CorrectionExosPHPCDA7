<?php
// fonction renvoyant la moyenne des éléments du tableau en paramètre
function moyenne(array $tab)
{
    return round(array_sum($tab)/count($tab),2);
}

function afficherTableau(array $tab)
{
    echo implode('-',$tab);
}


function estTableauPair(array $tab) : bool
{
    foreach ($tab as $value) {
        if ($value % 2 != 0) {
            return false;
        }
    }
    return true;
}
?>