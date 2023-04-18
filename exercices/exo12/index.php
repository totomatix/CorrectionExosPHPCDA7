<?php ob_start(); //  ne pas modifier
$titre = "Exo 12 - Fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$a = 15;
$b = 24;

function estPair(int $n): bool
{
    $r = false;
    if($n % 2 === 0){
        $r = true;
    }
    return $r;
}

if(estPair($b)){
    echo "le nombre $b est pair";
} else {
    echo "le nombre $b est impair";
}

echo "<br>";

function estPair2(int $n): bool
{
    return $n % 2 === 0;
}

echo "le nombre $a est " .(estPair2($a) ? "pair" : "impair");

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>