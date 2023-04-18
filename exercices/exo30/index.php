<?php ob_start(); //  ne pas modifier
$titre = "Exo 30 - Manipuler 2 classes"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

require_once 'Arme.php';
require_once 'Joueur.php';

$arme1 = new Arme("Hache", 10);
$arme2 = new Arme("Epée", 8);

$joueur1 = new Joueur();
$joueur1->setNom("Gaston");
$joueur1->setIdArme($arme1->getId());
echo $joueur1;

echo "--------------------<br>";

$joueur2 = new Joueur();
$joueur2->setNom("John");
$joueur2->setIdArme($arme2->getId());
echo $joueur2;

?>



<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>