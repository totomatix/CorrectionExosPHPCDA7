<?php ob_start(); //  ne pas modifier
$titre = "Exo 11 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$nbChoisi = 456;
$compteur = 0;
$random = -1;

while ($random != $nbChoisi) {
    $random = rand(100, 999);
    $compteur++;
    echo "Tirage $compteur : $random<br>";
}
echo "$nbChoisi trouvé en $compteur coups.";

?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>