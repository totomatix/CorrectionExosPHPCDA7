<?php ob_start(); //  ne pas modifier
$titre = "TP 05 - Gestion image/level"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

require_once "./Arme.php";

$arme1 = new Arme("épée", "Une arme tranchante");
$arme2 = new Arme("arc", "Une arme à distance");
$arme3 = new Arme("hache","Une arme tranchante ou outil pour couper du bois");
$arme4 = new Arme("fléau", "Une arme du moyen âge");

$armes = [$arme1, $arme2, $arme3, $arme4];

echo "<b>Voici toutes les armes :</b><br>";

$arme3->setLevel(5);
$arme4->setLevel(2);

foreach ($armes as $arme){
    echo $arme;
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