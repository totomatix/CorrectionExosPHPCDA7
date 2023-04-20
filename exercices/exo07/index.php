<?php ob_start(); //  ne pas modifier
$titre = "Exo 07 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$nb = rand(5, 15);
?>
<h3>Voici la table de multiplication de
    <?= $nb ?> :
</h3>
<?php
for ($i=1; $i <= 10; $i++) { 
    echo "$nb * $i = " . $i*$nb . '<br>';
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