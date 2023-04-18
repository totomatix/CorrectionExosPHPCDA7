<?php ob_start(); //  ne pas modifier
$titre = "Exo 06 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;

// personne 1
echo $nom . ' a ' . $age . " ans et c'est " . ($homme ? 'un homme.' : 'une femme.') . '<br>';
// personne 2
echo $nom2 . ' a ' . $age2 . " ans et c'est " . ($homme2 ? 'un homme.' : 'une femme.');

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>