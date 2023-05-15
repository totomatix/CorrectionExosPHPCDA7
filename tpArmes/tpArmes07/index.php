<?php
session_start();



ob_start(); //  ne pas modifier
$titre = "TP 07 - La session"; // Mettre le titre de la page
?>

<link rel="stylesheet" href="../css/style.css">
<!-- mettre votre code ici -->
<?php
require_once './Arme.php';

$armes = [
    new Arme('épée', 'Une arme tranchante', 5),
    new Arme('arc', 'Une arme à distance', 2),
    new Arme('hache', 'Outil pour couper le bois', 5),
    new Arme('fléau', 'Une arme tranchante', 5),
];

// gestion de la session
foreach ($armes as $arme) {
    if (!isset($_SESSION[remove_accents($arme->getNom())])) { // si l'arme n'existe pas encore dans la session
        $_SESSION[remove_accents($arme->getNom())] = 1;
    }
    else { // si l'arme était déjà enregistrée dans la session
        $arme->setLevel($_SESSION[remove_accents($arme->getNom())]);
    }
}

// traitement des formulaires
foreach ($armes as $arme) {
    if (isset($_POST[remove_accents($arme->getNom())])) { //si l'ame en cours a été paramétré par l'utilisateur
        $nomArme = $_POST[remove_accents($arme->getNom())];
        $arme->setLevel($nomArme);
        $_SESSION[remove_accents($arme->getNom())] = $nomArme;
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