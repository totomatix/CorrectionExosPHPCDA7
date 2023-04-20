<?php ob_start(); //  ne pas modifier
$titre = "Exo 09 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// génération d'un nombre aléatoire
$nb = rand(1, 20);
// boucle pour recommencer la génération d'un nombre aléatoire si celui-ci est inférieur à 15
$nbEssais = 1;
while ($nb < 15) {
    echo "Essaie $nbEssais : $nb est trop petit (<15)<br>";
    $nbEssais++;
    $nb = rand(1, 20);
}
// affichage du nombre supérieur à 15
echo "Le nombre choisi est : $nb";
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>