<?php ob_start(); //  ne pas modifier
$titre = "Exo 05 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$nb1 = rand(1, 100);
$nb2 = rand(1, 100);

$resultat = abs($nb1 - $nb2);

echo "Nombre 1 = <b>$nb1</b><br>";
echo "Nombre 2 = <b>$nb2</b><br>";

echo "Valeur absolue = $resultat<br>";

if($resultat >= 25 && $resultat <= 75){
    echo "La valeur absolue de ($nb1 - $nb2) est comprise entre 25 et 75";
} else {
    echo "La valeur absolue de ($nb1 - $nb2) n'est pas comprise entre 25 et 75";
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