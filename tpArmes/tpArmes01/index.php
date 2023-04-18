<?php ob_start(); //  ne pas modifier
$titre = "TP 01 - Les variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$arme1 = "épée";
$arme2 = "arc";
$arme3 = "hache";
$arme4 = "fléau";

$armes = [$arme1, $arme2, $arme3, $arme4];

echo "<b>Voici toutes les armes</b><br>";
for ($i=0; $i < count($armes) ; $i++) { 
    echo "Arme " .($i+1). " : " .$armes[$i]. "<br>";
}
echo "<br>";

?>

<div class="input-field col s3">
    <select>
        <option value="" disabled selected>Choisir une arme</option>
        <?php foreach ($armes as $arme) : ?>
            <option value="#"><?= $arme ?></option>
        <?php endforeach; ?>
    </select>
    <label>Armes</label>
</div>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>