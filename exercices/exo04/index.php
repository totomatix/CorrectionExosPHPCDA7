<?php ob_start(); //  ne pas modifier
$titre = "Exo 04 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

// génération d'un nombre aléatoire entre 1 et 20
$nb = rand(1,20);
// affichage du nombre aléatoire
?>
<h2>Le nombre est : <?= $nb?></h2>

<?php
// affichage de la fourchette du nombre
echo "Il est compris entre ";
if ($nb <= 5) {
    echo "1 et 5";
} else if ($nb <= 10) {
    echo "6 et 10";
} else if ($nb <= 15) {
    echo "11 et 15";
} else {
    echo "16 et 20";
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