<?php ob_start(); //  ne pas modifier
$titre = "TP 02 - Tableaux associatifs"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$arme1 = [
    "nom" => "épée",
    "image" => "./../sources/epee/epee1.png",
    "description" => "Une arme tranchante"
];

$arme2 = [
    "nom" => "arc",
    "image" => "./../sources/arc/arc1.png",
    "description" => "Une arme à distance"
];

$arme3 = [
    "nom" => "hache",
    "image" => "./../sources/hache/hache1.png",
    "description" => "Une arme tranchante ou outil pour couper du bois"
];

$arme4 = [
    "nom" => "fléau",
    "image" => "./../sources/fleau/fleau1.png",
    "description" => "Une arme du moyen âge"
];

$armes = [$arme1, $arme2, $arme3, $arme4];

echo "<b>Voici toutes les armes :</b><br>";

?>

<?php foreach ($armes as $arme) : ?>
    <div class="row">
        <div class="col s4">
            <img src="<?= $arme['image']; ?>" alt="arme">
        </div>
        <div class="col s8">
            <div>
                <h4><?= $arme["nom"]; ?></h4>
                <p><?= $arme["description"]; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>