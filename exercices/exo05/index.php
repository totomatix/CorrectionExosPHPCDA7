<?php ob_start(); //  ne pas modifier
$titre = "Exo 05 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// création des deux nombres aléatoires
$nb1 = rand(1,100);
$nb2 = rand(1,100);
// affichage de ces deux nombres
echo "Nombre 1 : <b>{$nb1}</b><br>";
echo "Nombre 2 : <b>{$nb2}</b><br>";
// calcul de la différence entre le deuxième nombre et le premier
$diff = $nb2 - $nb1;
// calcul de la valeur absolue
$valeurAbsolue = abs($diff);
// affichage de la valeur absolue
echo "Valeur absolue de <b>{$nb2}</b> - <b>{$nb1}</b> = <b>$valeurAbsolue</b><br>";
// afficher si la valeur absolue est comprise entre 25 et 75
echo "La valeur absolue de (<b>{$nb2}</b> - <b>{$nb1}</b>)";
if ($valeurAbsolue >= 25 && $valeurAbsolue <= 75) {
    echo " est ";
} else {
    echo " n'est pas ";
}

echo "comprise entre 25 et 75";

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>