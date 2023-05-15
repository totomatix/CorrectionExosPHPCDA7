<?php ob_start(); //  ne pas modifier
$titre = "TP 05 - Gestion image/level"; // Mettre le titre de la page
?>

<link rel="stylesheet" href="../css/style.css">
<!-- mettre votre code ici -->
<?php
require_once './Arme.php';

$armes = [
    new Arme('épée','Une arme tranchante'),
    new Arme('arc','Une arme à distance'),
    new Arme('hache','Outil pour couper le bois'),
    new Arme('fléau','Une arme tranchante'),
];

echo '<b>Voici toutes les armes : </b><br>';
foreach ($armes as $arme) {
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