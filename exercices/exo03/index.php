<?php ob_start(); //  ne pas modifier
$titre = "Exo 03 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$sexe = "H";
$age = 30;

if ($age>=21 && $age<=40 && $sexe == "F") {
    echo "Vous remplissez les conditions";
}
else {
    echo "Désole, vous ne remplissez pas les conditions";
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