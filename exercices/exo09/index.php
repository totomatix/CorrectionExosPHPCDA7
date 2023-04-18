<?php ob_start(); //  ne pas modifier
$titre = "Exo 09 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$k = 0;
$j = 0;
    while($j < 15){
        $k++;
        $j = rand(1, 20);
        echo "Essai $k : $j";
        echo ($j<15) ? " est trop petit" : " est parfait";
        echo "<br>";
    }
echo "<br> Fini en $k essais - le nombre chois est $j";

echo "<br>==================<br>";

$nb = rand(1, 20);
$essai = 1;

while($nb < 15){
    echo "$nb est trop petit<br>";
    $nb = rand(1, 20);
    $essai++;
}

echo "Fini en en $essai essais - le nombre choisi est $nb";

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>