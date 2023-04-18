<?php ob_start(); //  ne pas modifier
$titre = "Exo 25 - Bonus"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
require_once "gestionTableaux.php";
function debug($v)
{
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
}

$tab1 = [12,13,6,2,18,20];
$tab2 = [2,4,6,8,10];

$tab = [$tab1, $tab2];

foreach ($tab as $v) {
    afficherTableau($v);
    echo "<br>".calculerMoyenne($v);
    echo "<br>" .(estTableauPair($v) ? "Le tableau contient que des nombres pairs" : "Le tableau ne contient pas que des nombres pairs");
    echo "<br><br>";
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