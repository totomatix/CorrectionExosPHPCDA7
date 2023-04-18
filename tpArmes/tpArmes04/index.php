<?php ob_start(); //  ne pas modifier
$titre = "TP 04 - Améliorations POO"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

require_once "./Arme.php";

$arme1 = new Arme("épée", "Une arme tranchante", "./../sources/epee/epee1.png");
$arme2 = new Arme("arc", "Une arme à distance","./../sources/arc/arc1.png");
$arme3 = new Arme("hache","Une arme tranchante ou outil pour couper du bois","./../sources/hache/hache1.png");
$arme4 = new Arme("fléau", "Une arme du moyen âge", "./../sources/fleau/fleau1.png");

$armes = [$arme1, $arme2, $arme3, $arme4];

$randomArme = rand(1, 5);
$arme1->setImage("./../source/epee/epee" .$randomArme. ".png");

$randomArme = rand(1, 2);
$arme2->setImage("./../source/arc/arc" .$randomArme. ".png");

$randomArme = rand(1, 5);
$arme3->setImage("./../source/hache/hache" .$randomArme. ".png");

$randomArme = rand(1, 5);
$arme4->setImage("./../source/fleau/fleau" .$randomArme. ".png");

echo "<b>Voici toutes les armes :</b><br>";

?>

<?php
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