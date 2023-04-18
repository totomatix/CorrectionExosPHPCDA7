<?php ob_start(); //  ne pas modifier
$titre = "Exo 02 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$nom = "Marie";
$age = 30;
$sexe = "femme";

$nom2 = "Pierre";
$age2 = 32;
$sexe2 = "homme";

echo $nom . " a " . $age . " ans et c'est une " . $sexe ."<br>";

echo "$nom2 a $age2 ans et c'est un $sexe2";



?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>