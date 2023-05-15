<?php ob_start(); //  ne pas modifier
$titre = "TP 04 - Améliorations POO"; // Mettre le titre de la page
?>
<link rel="stylesheet" href="../css/style.css">
<!-- mettre votre code ici -->
<?php
require_once './Arme.php';

$armes = [
    new Arme('épée','/tpArmes/source/epee/epee$.png','Une arme tranchante'),
    new Arme('arc','/tpArmes/source/arc/arc$.png','Une arme à distance'),
    new Arme('hache','/tpArmes/source/hache/hache$.png','Outil pour couper le bois'),
    new Arme('fleau','/tpArmes/source/fleau/fleau$.png','Une arme tranchante'),
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