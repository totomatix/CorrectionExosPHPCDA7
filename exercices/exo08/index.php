<?php ob_start(); //  ne pas modifier
$titre = "Exo 0 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$nb = rand(5, 15);

echo "<p><b>voici le cumul des $nb premiers nombres (sens inverse)</b></p>";

$resultat = 0;
for ($i = $nb; $i > 0; $i--){
    $resultat += $i;
    $j = $nb + 1 - $i;
    // echo 'Etape ' .$j. ' - résultat = ' .$resultat. '<br>';
    echo "<p>Etape $j - résultat = $resultat</p>";
}

echo "======================<br>";

$resultat = 0;
for($i=0; $i<$nb; $i++){
    $resultat += $nb -$i;
    $compteur = $i +1;
    echo "Etape $compteur résultat = $resultat<br>";
}


?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>