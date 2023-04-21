<?php ob_start(); //  ne pas modifier
$titre = "Exo 13 - Fonctions"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php

function factorielle(int $nb) : int
{
    $f = 1;
    for ($i=2; $i <= $nb ; $i++) { 
        $f *= $i;
    }
    return $f;
}

function factorielleRecursive(int $nb) : int
{
    if ($nb == 1) {
        return 1;
    }
    return $nb * factorielleRecursive($nb-1);
}


$n1 = rand(1,15);
echo "La factorielle de $n1 est " . factorielle($n1) . '<br>';
echo "La factorielle recursive de $n1 est " . factorielleRecursive($n1);
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>