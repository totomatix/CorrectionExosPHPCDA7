<?php ob_start(); //  ne pas modifier
$titre = "TP 02 - Tableaux associatifs"; // Mettre le titre de la page
?>
<link rel="stylesheet" href="../css/style.css">
<!-- mettre votre code ici -->
<?php
// fonction permettant d'afficher une arme
function afficherArme(array $arme)
{
    echo '<div id="flex-container">';
    echo '<img src="' . $arme['image'] . '" alt= "' . $arme['nom'] . '">';
    echo '<div>';
    echo '<h5>'.$arme['nom'].'</h5>';
    echo '<p>'.$arme['description'].'</p>';
    echo '</div>';
    echo '</div>';
}


$armes = [
    ['nom'=>'épée','image'=>'/tpArmes/source/epee/epee1.png','description'=>'Une arme tranchante'],
    ['nom'=>'arc','image'=>'/tpArmes/source/arc/arc1.png','description'=>'Une arme à distance'],
    ['nom'=>'hache','image'=>'/tpArmes/source/hache/hache1.png','description'=>'Outil pour couper le bois'],
    ['nom'=>'fleau','image'=>'/tpArmes/source/fleau/fleau1.png','description'=>'Une arme tranchante'],
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