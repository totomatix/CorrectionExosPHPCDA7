<?php ob_start(); //  ne pas modifier
$titre = "Exo 06 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$nom = "Marie";
$age = 30;
$homme = false;
$sexe = $homme ? 'un homme' : 'une femme';

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;
$sexe2 = $homme2 ? 'un homme' : 'une femme';


echo "$nom a $age et c'est $sexe <br>";
echo $nom2.' a ' .$age2. ' et c\'est ' .$sexe2. '<br>';

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>