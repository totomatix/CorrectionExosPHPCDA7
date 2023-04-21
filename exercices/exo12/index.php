<?php ob_start(); //  ne pas modifier
$titre = "Exo 12 - Fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
    function pair(int $nb) : bool
    {
        return ($nb%2==0);
    }

    $n1 = rand (1,100);
    echo "Le nombre $n1 " .  ( (pair($n1)) ? "est pair." : "n'est pas pair.") . '<br>';

    $n2 = rand (1,100);
    echo "Le nombre $n2 " . ( (pair($n2)) ? "est pair." : "n'est pas pair.");
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>