<?php ob_start(); //  ne pas modifier
$titre = "Exo 19 - Tableaux"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
$personnes = [
    'personne1' => ['nom' => 'Clément', 'age' => 25, 'sexe' => false],
    'personne2' => ['nom' => 'Mathilde', 'age' => 19, 'sexe' => true]
];
AfficherPersonnes($personnes);

function AfficherPersonnes($tab_personnes)
{
    // parcours du 1er niveau du tableau
    foreach ($tab_personnes as $personne) {
        // parcours du tableau de chaque personne
        foreach ($personne as $propriete => $value) {
            if ($propriete != 'sexe') {
                echo "$propriete : $value<br>";
            } else {
                echo "$propriete : " . (($value) ? 'femme' : 'homme') . '<br>';
            }
        }
        echo "=============<br>";
    }
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
