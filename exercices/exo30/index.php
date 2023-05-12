<?php ob_start(); //  ne pas modifier
$titre = "Exo 30 - Manipuler 2 classes"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
require_once './Joueur.php';
require_once './Arme.php';

$j1 = new Joueur('Gaston',5,100,new Arme(10,'Hache'));
$j2 = new Joueur('John',5,100,new Arme(8,'Epee'));
echo $j1;
echo '================<br>';
echo $j2;
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>