<?php ob_start(); //  ne pas modifier
$titre = "Exo 01 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$a = 3;
$b = 5;
$c = 7;

echo "********** Avant permutation ********<br>";

echo "A: $a<br>";
echo "B: $b<br>";
echo "C: $c<br>";
// Perumtation des variables
$tmp = $a;
$a = $b;
$b = $c;
$c = $tmp;

echo "********** Après permutation ********<br>";

echo "A: $a<br>";
echo "B: $b<br>";
echo "C: $c<br>";
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>