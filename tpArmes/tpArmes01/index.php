<?php ob_start(); //  ne pas modifier
$titre = "TP 01 - Les variables"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
$arme1 = 'épéé';
$arme2 = 'arc';
$arme3 = 'hache';
$arme4 = 'fléau';
$armes = [$arme1,$arme2,$arme3,$arme4];
// 1er affichage
?>
<b>Voici toutes les armes</b><br>
<?php
    for ($i=0; $i < count($armes); $i++) { 
        echo "Arme " . ($i+1) . " : $armes[$i]<br>";
    }
?>
<form action="">
    <label for="armes"></label>
    <select name="" id="armes">
        <option value="">Choisir une arme</option>
        <?php
            foreach ($armes as $arme) {
                echo "<option> $arme </option>";
            }
        ?>
    </select>
</form>
<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>