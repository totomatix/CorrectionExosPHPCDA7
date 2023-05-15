<?php ob_start(); //  ne pas modifier
$titre = "TP 06 - Gestion max level"; // Mettre le titre de la page
?>

<link rel="stylesheet" href="../css/style.css">
<!-- mettre votre code ici -->
<?php
require_once './Arme.php';

$armes = [
    new Arme('épée','Une arme tranchante',5),
    new Arme('arc','Une arme à distance',2),
    new Arme('hache','Outil pour couper le bois',5),
    new Arme('fléau','Une arme tranchante',5),
];

// traitement des formulaires
foreach ($armes as $arme) {
    if(isset($_POST[remove_accents($arme->getNom())])) { //si l'ame en cours a été paramétré par l'utilisateur
        $arme->setLevel($_POST[remove_accents($arme->getNom())]);
    }
}

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