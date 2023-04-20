<?php ob_start(); //  ne pas modifier
$titre = "Exo 0 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$nb = rand(5, 15);
// $nb = 7;
?>
<h4>Voici le cumul des
    <?= $nb ?> premiers nombres (sens inverse) :
</h4>
<?php
$somme = 0;
$numEtape = 1;
for ($i = $nb; $i > 0; $i--) {
    $somme += $i;
    echo "Etape " . $numEtape . " - résultat = $somme<br>";
    $numEtape++;
}
?>

<?php
// $nb = rand(5,15);
$nb = 7;
?>
<h4>Voici le cumul des
    <?= $nb ?> premiers nombres (sens inverse) :
</h4>
<?php
$somme = 0;
for ($i = 0; $i < $nb; $i++) {
    $somme += $nb - $i;
    echo "Etape " . $i + 1 . " - résultat = $somme<br>";
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