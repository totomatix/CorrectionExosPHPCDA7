<?php ob_start(); //  ne pas modifier
$titre = "TP 03 - La POO"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

require_once "./Arme.php";

$arme1 = new Arme("épée", "Une arme tranchante", "./../sources/epee/epee1.png");
$arme2 = new Arme("arc", "Une arme à distance","./../sources/arc/arc1.png");
$arme3 = new Arme("hache","Une arme tranchante ou outil pour couper du bois","./../sources/hache/hache1.png");
$arme4 = new Arme("fléau", "Une arme du moyen âge", "./../sources/fleau/fleau1.png");



$armes = [$arme1, $arme2, $arme3, $arme4];

echo "<b>Voici toutes les armes :</b><br>";

?>

<?php foreach ($armes as $arme) : ?>
    <div class="row">
        <div class="col s4">
            <img src="<?= $arme->image; ?>" alt="arme">
        </div>
        <div class="col s8">
            <div>
                <h4><?= $arme->nom; ?></h4>
                <p><?= $arme->description; ?></p>
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