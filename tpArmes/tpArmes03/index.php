<?php ob_start(); //  ne pas modifier
$titre = "TP 03 - La POO"; // Mettre le titre de la page
?>
<link rel="stylesheet" href="../css/style.css">
<!-- mettre votre code ici -->
<?php
require_once './Arme.php';

// fonction permettant d'afficher une arme
function afficherArme(Arme $arme)
{
    echo '<div id="flex-container">';
    echo '<img src="' . $arme->image . '" alt= "' . $arme->nom . '">';
    echo '<div>';
    echo '<h5>'.$arme->nom .'</h5>';
    echo '<p>'.$arme->description .'</p>';
    echo '</div>';
    echo '</div>';
}


$armes = [
    new Arme('épée','/tpArmes/source/epee/epee1.png','Une arme tranchante'),
    new Arme('arc','/tpArmes/source/arc/arc1.png','Une arme à distance'),
    new Arme('hache','/tpArmes/source/hache/hache1.png','Outil pour couper le bois'),
    new Arme('fleau','/tpArmes/source/fleau/fleau1.png','Une arme tranchante'),
];

echo '<b>Voici toutes les armes : </b><br>';
foreach ($armes as $arme) {
    afficherArme($arme);
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