<?php ob_start(); //  ne pas modifier
$titre = "Exo 15 - Tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function supprimer_voyelles(string $mot) : string
{
    $voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
    return str_replace($voyelles,"",$mot);
}

$mot = "bordure";
echo "Le mot <b>\"$mot\"</b> sans voyelles est <b>\"" . supprimer_voyelles($mot) . "\"</b>";
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>