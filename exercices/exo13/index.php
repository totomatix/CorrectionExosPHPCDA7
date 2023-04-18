<?php ob_start(); //  ne pas modifier
$titre = "Exo 13 - Fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$a = 10;
$b = 6;

function fact(int $n): int
{
    $resultat = 1;
    if($n === 0 || $n === 1){
        return $resultat;
    }

    for($i=2; $i <= $n; $i++){
        $resultat *= $i;
    }
    return $resultat;
}

echo "La factorielle de $a est : " .fact($a);

echo "<br>====================<br>";

function fact2(int $n): int
{
    $resultat = 1;
    
    for($i=2; $i <= $n; $i++){
        $resultat *= $i;
    }
    return $resultat;
}

echo "La factorielle de $a est : " .fact2($a);

echo "<br>====================<br>";

function fact3(int $n): int
{
    if($n == 0 || $n == 1){
        return 1;
    } 
    return $n * fact3($n - 1);
}

echo "La factorielle de $a est : " .fact3($a);

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>